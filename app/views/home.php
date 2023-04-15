<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Koneksi PHP</title>

  <link href="index_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  body {
    background-color: rgb(0, 0, 0);
  }

  span {
    background-color: #b4b4b4;
  }

  .table1 {
    font-family: sans-serif;
    color: rgb(172, 2, 2);
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #ffffff;
  }

  .table1 tr th {
    background: #9d0000;
    color: rgb(255, 255, 255);
    font-weight: normal;
  }

  .table1,
  th,
  td {
    padding: 8px 20px;
    text-align: center;
  }

  .table1 tr:hover {
    background-color: #ffffff;
  }

  .table1 tr:nth-child(even) {
    background-color: #cfcfcf;
  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }
</style></head>



<body style="text-align:center"><br><br>

<h1 style="text-align:center;color:rgb(0, 0, 0);"><span>HYPERLINK KONEKSI DATABASE</span></h1>

<br><br>



  <table style="width:40%" class="center table1">
    <tbody><tr>
      <th style="text-align:center;">
        <h2>Hyperlink Koneksi Database MariaDB</h2>
      </th>
    </tr>

    <tr>
      <td style="text-align:center;"><a href="<?=base_url()?>mariadb/indexmariadb.php">
          <button type="button" class="btn btn-secondary">
            <h2>MariaDB</h2>
          </button></a>
      </td>
    </tr>
  </tbody></table>


  <br><br>


  <table style="width:40%" class="center table1">
    <tbody><tr>
      <th style="text-align:center;">
        <h2>Hyperlink Koneksi Database PostgreSQL</h2>
      </th>
    </tr>
    <tr>
      <td style="text-align:center;"><a href="<?=base_url()?>home/setting/postgres"><button type="button" class="btn btn-secondary">
            <h2>PostgreSQL</h2>
          </button></a>
      </td>
    </tr>
  </tbody></table>


</body></html>