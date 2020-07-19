<?php

/*
|--------------------------------------------------------------------------
| Load Configuration File and BasicPHP Class Library
|--------------------------------------------------------------------------
*/

require_once 'config.php';
require_once 'Basic.php';

/*
|--------------------------------------------------------------------------
| Security
|--------------------------------------------------------------------------
*/

Basic::firewall(); // Firewall
Basic::force_ssl(); // SSL/HTTPS

/*
|--------------------------------------------------------------------------
| Routing
|--------------------------------------------------------------------------
*/

Basic::route_auto(); // Automatic '/class/method' routing
Basic::homepage(); // Render homepage

/*
|--------------------------------------------------------------------------
| Endpoint Routing
|--------------------------------------------------------------------------
*/

Basic::route('POST', '/jsonrpc', function() {
    Basic::json_rpc(); // JSON-RPC endpoint
});

Basic::route('GET', '/posts', function() {
    if (! isset($_GET['order'])) $_GET['order'] = 0;

    if (! is_numeric($_GET['order'])) {
        $error_message = 'Post order value should be numeric.';
        $page_title = 'Error in order parameter';

        $data = compact('error_message', 'page_title');
        Basic::view('error', $data);
    }
    if (isset($_GET['order']) && $_GET['order'] < 0) $_GET['order'] = 0;

    $per_page = 3;
    $order = intval($_GET['order']);

    $post = new PostModel;
    $stmt = $post->list( $per_page, $order );
    $total = $post->total();

    if (isset($_GET['order']) && $_GET['order'] > $total) $_GET['order'] = $total;

    $page_title = 'List of Posts';

    $data = compact('stmt', 'total', 'per_page', 'page_title');
    Basic::view('post_list', $data);
});

Basic::route('GET' || 'POST', '/posts/(:num)', function() {
    if (isset($_POST['delete-post']) && isset($_POST['csrf-token']) && isset($_SESSION['csrf-token']) && $_POST['csrf-token'] == $_SESSION['csrf-token']) {
        $post = new PostModel;
        $post->delete(Basic::segment(2));

        header('Location: ' . BASE_URL . 'posts');
        exit();
    }

    if (isset($_POST['goto-edit'])) {
        header('Location: ' . BASE_URL . 'posts/' . Basic::segment(2) . '/edit');
        exit();
    }

    $post = new PostModel;
    $row = $post->view(Basic::segment(2));

    if ($row) {
        $page_title = 'View Post';

        $data = compact('row', 'page_title');
        Basic::view('post_view', $data);
    } else {
        $error_message = 'The Post ID does not exist.';
        $page_title = 'Error in Post ID';

        $data = compact('error_message', 'page_title');
        Basic::view('error', $data);
    }
});

Basic::route('GET' || 'POST', '/posts/(:num)/edit', function() {
    $post = new PostModel;

    if (isset($_POST['edit-post']) && isset($_POST['csrf-token']) && isset($_SESSION['csrf-token']) && $_POST['csrf-token'] == $_SESSION['csrf-token']) {
        $post->edit(Basic::segment(2));

        header('Location: ' . BASE_URL . 'posts/' . Basic::segment(2));
        exit();
    }

    $row = $post->view( Basic::segment(2) );

    if ($row) {
        $page_title = 'Edit Post';

        $data = compact('row', 'page_title');
        Basic::view('post_edit', $data);
    } else {
        $error_message = "The Post ID does not exist.";
        $page_title = 'Error in Post ID';

        $data = compact('error_message', 'page_title');
        Basic::view('error', $data);
    }
});

/*
|--------------------------------------------------------------------------
| Handle Error 404 - Page Not Found - Invalid URI
|--------------------------------------------------------------------------
*/

Basic::error404(); // Handle Error 404