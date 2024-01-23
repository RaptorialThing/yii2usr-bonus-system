--
-- PostgreSQL database dump
--

-- Dumped from database version 12.17 (Ubuntu 12.17-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.17 (Ubuntu 12.17-0ubuntu0.20.04.1)

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
-- Name: migration; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE public.migration OWNER TO postgres;

--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    name character varying(255),
    balance bigint DEFAULT 0
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: user_bonus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_bonus (
    id integer NOT NULL,
    points bigint DEFAULT 0,
    comment text,
    date_create date,
    user_id bigint NOT NULL
);


ALTER TABLE public.user_bonus OWNER TO postgres;

--
-- Name: user_bonus_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_bonus_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_bonus_id_seq OWNER TO postgres;

--
-- Name: user_bonus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_bonus_id_seq OWNED BY public.user_bonus.id;


--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Name: user_bonus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_bonus ALTER COLUMN id SET DEFAULT nextval('public.user_bonus_id_seq'::regclass);


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migration (version, apply_time) FROM stdin;
m000000_000000_base	1705966982
m240122_161230_create_users_table	1705966984
m240122_173100_add_balance_to_user_record	1705966984
m240122_205207_create_user_bonus_table	1705966984
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, name, balance) FROM stdin;
1	Алекс	8
5	Саша	25
6	Бен	20
9	Кэт	9
2	Диана	19
7	Эл	19
3	Вова	1009
8	Эсмеральда	20
4	Маша	510
10	Вик	30
\.


--
-- Data for Name: user_bonus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_bonus (id, points, comment, date_create, user_id) FROM stdin;
1	10	a	2024-01-05	1
2	0	a	2024-01-23	2
3	0	a	2024-01-23	3
6	10	a	2024-01-23	6
7	10	a	2024-01-23	7
8	10	a	2024-01-23	8
9	10	a	2024-01-23	10
4	0	a	2024-01-23	4
5	10	a	2024-01-23	5
10	1		2024-01-23	1
11	1		2024-01-23	1
12	1		2024-01-23	1
13	1		2024-01-23	1
14	1		2024-01-23	1
15	1		2024-01-23	1
16	1		2024-01-23	1
17	1		2024-01-23	1
18	1		2024-01-24	9
19	1		2024-01-24	9
20	1		2024-01-24	9
21	1		2024-01-24	9
22	1		2024-01-24	9
23	1		2024-01-24	9
24	1		2024-01-24	9
25	1		2024-01-24	9
26	1		2024-01-24	9
27	1		2024-01-23	2
28	1		2024-01-23	2
29	1		2024-01-23	2
30	1		2024-01-23	2
31	1		2024-01-23	2
32	1		2024-01-23	2
33	1		2024-01-23	2
34	1		2024-01-23	2
35	1		2024-01-23	2
36	1		2024-01-23	3
37	1		2024-01-23	3
38	1		2024-01-23	3
39	1		2024-01-23	3
40	1		2024-01-23	3
41	1		2024-01-23	3
42	1		2024-01-23	3
43	1		2024-01-23	3
44	1		2024-01-23	3
45	1		2024-01-23	4
46	1		2024-01-23	4
47	1		2024-01-23	4
48	1		2024-01-23	4
49	1		2024-01-23	4
50	1		2024-01-23	4
51	1		2024-01-23	4
52	1		2024-01-23	4
53	1		2024-01-23	4
54	1		2024-01-23	4
55	1		2024-01-23	5
56	1		2024-01-23	5
57	1		2024-01-23	5
58	1		2024-01-23	5
59	1		2024-01-23	5
60	1		2024-01-23	5
61	1		2024-01-23	5
62	1		2024-01-23	5
63	1		2024-01-23	5
64	1		2024-01-23	5
65	1	a	2024-01-23	6
66	1	a	2024-01-23	6
67	1	a	2024-01-23	6
68	1	a	2024-01-23	6
69	1	a	2024-01-23	6
70	1	a	2024-01-23	6
71	1	a	2024-01-23	6
72	1	a	2024-01-23	6
73	1	a	2024-01-23	6
74	1	a	2024-01-23	6
75	1		2024-01-23	7
76	1		2024-01-23	7
77	1		2024-01-23	7
78	1		2024-01-23	7
79	1		2024-01-23	7
80	1		2024-01-23	7
81	1		2024-01-23	7
82	1		2024-01-23	7
83	1		2024-01-23	7
84	1		2024-01-23	8
85	1		2024-01-23	8
86	1		2024-01-23	8
87	1		2024-01-23	8
88	1		2024-01-23	8
89	1		2024-01-23	8
90	1		2024-01-23	8
91	1		2024-01-23	8
92	1		2024-01-23	8
93	1		2024-01-23	8
94	1	a	2024-01-23	10
95	1	a	2024-01-23	10
96	1	a	2024-01-23	10
97	1	a	2024-01-23	10
98	1	a	2024-01-23	10
99	1	a	2024-01-23	10
100	1	a	2024-01-23	10
101	1	a	2024-01-23	10
102	1	a	2024-01-23	10
103	1	a	2024-01-23	10
104	10		2024-01-23	1
105	0		2024-01-23	1
106	0		2024-01-23	1
107	0		2024-01-23	1
108	0		2024-01-23	1
109	20		2024-01-23	1
110	10		2024-01-23	1
111	10		2024-01-23	1
112	10		2024-01-23	1
113	10		2024-01-23	1
114	10		2024-01-23	1
115	10		2024-01-23	1
116	10		2024-01-23	1
117	10		2024-01-23	1
\.


--
-- Name: user_bonus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_bonus_id_seq', 117, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 10, true);


--
-- Name: migration migration_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);


--
-- Name: user_bonus user_bonus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_bonus
    ADD CONSTRAINT user_bonus_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user_bonus idx-user-bonus-user_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_bonus
    ADD CONSTRAINT "idx-user-bonus-user_id" FOREIGN KEY (user_id) REFERENCES public."user"(id) ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

