--
-- PostgreSQL database dump
--

-- Dumped from database version 13.10
-- Dumped by pg_dump version 13.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: identitas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.identitas (
    id integer NOT NULL,
    nama character varying,
    alamat character varying,
    email character varying,
    gambar character varying
);


ALTER TABLE public.identitas OWNER TO postgres;

--
-- Name: identitas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.identitas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.identitas_id_seq OWNER TO postgres;

--
-- Name: identitas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.identitas_id_seq OWNED BY public.identitas.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    user_id integer NOT NULL,
    username character varying,
    password character varying,
    pass character varying,
    fullname character varying,
    email character varying NOT NULL,
    phone character varying NOT NULL,
    token character varying NOT NULL,
    is_active integer NOT NULL,
    level integer,
    created_at timestamp with time zone DEFAULT now() NOT NULL,
    update_at timestamp with time zone DEFAULT now()
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_user_id_seq OWNER TO postgres;

--
-- Name: users_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_user_id_seq OWNED BY public.users.user_id;


--
-- Name: identitas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.identitas ALTER COLUMN id SET DEFAULT nextval('public.identitas_id_seq'::regclass);


--
-- Name: users user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN user_id SET DEFAULT nextval('public.users_user_id_seq'::regclass);


--
-- Data for Name: identitas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.identitas (id, nama, alamat, email, gambar) FROM stdin;
1	Sovia	Nganjuk	sovia@gmail.com	sovia.jpg
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (user_id, username, password, pass, fullname, email, phone, token, is_active, level, created_at, update_at) FROM stdin;
1	haidar	rstrtsrt	rstrst	rstrt	rstsrtsrt	12312321	123123	1	1	2023-03-24 10:58:20.540911+07	2023-03-24 10:59:24.309528+07
2	sovia	sovia123	sovia123	wahyuning tyass	123123	12313	1231	1	1	2023-03-24 11:01:20.580349+07	2023-03-24 11:01:20.580349+07
\.


--
-- Name: identitas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.identitas_id_seq', 1, false);


--
-- Name: users_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_user_id_seq', 2, true);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- PostgreSQL database dump complete
--

