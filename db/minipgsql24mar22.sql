--
-- PostgreSQL database dump
--

-- Dumped from database version 13.7
-- Dumped by pg_dump version 13.7

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
-- Name: settings; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.settings (
    setting_id integer NOT NULL,
    station_id character varying(500) DEFAULT NULL::character varying,
    alarm_01h_status integer DEFAULT 0,
    alarm_24h_status integer DEFAULT 0,
    alarm_01h integer DEFAULT 0,
    alarm_24h integer DEFAULT 100,
    alarm_sms bigint DEFAULT 0,
    alarm integer DEFAULT 1,
    protocol character varying(100) DEFAULT 'socket'::character varying,
    "interval" integer DEFAULT 3,
    instantaneous integer DEFAULT 1,
    apn character varying(900) DEFAULT NULL::character varying,
    dns character varying(900) DEFAULT '8.8.8.8'::character varying,
    password_gprs character varying(900) DEFAULT NULL::character varying,
    "user" character varying(900) DEFAULT NULL::character varying,
    address1 character varying(900) DEFAULT NULL::character varying,
    passwd1 character varying(900) DEFAULT NULL::character varying,
    path1 character varying(900) DEFAULT NULL::character varying,
    user1 character varying(900) DEFAULT NULL::character varying,
    port1 integer DEFAULT 0,
    address2 character varying(900) DEFAULT NULL::character varying,
    passwd2 character varying(900) DEFAULT NULL::character varying,
    path2 character varying(900) DEFAULT NULL::character varying,
    user2 character varying(900) DEFAULT NULL::character varying,
    port2 integer DEFAULT 80,
    version bigint,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.settings OWNER TO postgres;

--
-- Name: settings_setting_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.settings_setting_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.settings_setting_id_seq OWNER TO postgres;

--
-- Name: settings_setting_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.settings_setting_id_seq OWNED BY public.settings.setting_id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    user_id integer NOT NULL,
    username character varying NOT NULL,
    password character varying NOT NULL,
    pass character varying NOT NULL
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
-- Name: settings setting_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.settings ALTER COLUMN setting_id SET DEFAULT nextval('public.settings_setting_id_seq'::regclass);


--
-- Name: users user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN user_id SET DEFAULT nextval('public.users_user_id_seq'::regclass);


--
-- Data for Name: settings; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.settings (setting_id, station_id, alarm_01h_status, alarm_24h_status, alarm_01h, alarm_24h, alarm_sms, alarm, protocol, "interval", instantaneous, apn, dns, password_gprs, "user", address1, passwd1, path1, user1, port1, address2, passwd2, path2, user2, port2, version, created_at, updated_at) FROM stdin;
6	15	0	0	20	100	81220888447	0	socket	7	1	telkomsel	2	bismillah	1	example.com	hai		haidar	443	www.example.com	bismillah	/json	haidar	443	\N	2022-04-02 00:15:42	2023-03-24 04:47:50
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (user_id, username, password, pass) FROM stdin;
1	haidar	haidar123	0774a7ef3f6ef2f5d9540e1a827455abbb3e5214
\.


--
-- Name: settings_setting_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.settings_setting_id_seq', 1, false);


--
-- Name: users_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_user_id_seq', 1, true);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- PostgreSQL database dump complete
--

