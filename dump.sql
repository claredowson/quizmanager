--
-- PostgreSQL database dump
--

-- Dumped from database version 12.6
-- Dumped by pg_dump version 12.3

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
-- Name: general; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.general (
    id bigint NOT NULL,
    question character varying(255) NOT NULL,
    choice_1 character varying(255) NOT NULL,
    choice_2 character varying(255) NOT NULL,
    choice_3 character varying(255) NOT NULL,
    choice_4 character varying(255) NOT NULL,
    answer character varying(255) NOT NULL
);


--
-- Name: general_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.general_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: general_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.general_id_seq OWNED BY public.general.id;


--
-- Name: history; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.history (
    id bigint NOT NULL,
    question character varying(255) NOT NULL,
    choice_1 character varying(255) NOT NULL,
    choice_2 character varying(255) NOT NULL,
    choice_3 character varying(255) NOT NULL,
    choice_4 character varying(255) NOT NULL,
    answer character varying(255) NOT NULL
);


--
-- Name: history_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.history_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: history_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.history_id_seq OWNED BY public.history.id;


--
-- Name: quiz; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.quiz (
    id character varying(4) NOT NULL,
    question character varying(255) NOT NULL,
    choice_1 character varying(255) NOT NULL,
    choice_2 character varying(255) NOT NULL,
    choice_3 character varying(255) NOT NULL,
    choice_4 character varying(255) NOT NULL,
    answer character varying(255) NOT NULL
);


--
-- Name: quiz_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.quiz_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: quiz_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.quiz_id_seq OWNED BY public.quiz.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    username character varying(65) NOT NULL,
    password character varying(255) NOT NULL,
    role character varying(40) NOT NULL
);


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: general id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.general ALTER COLUMN id SET DEFAULT nextval('public.general_id_seq'::regclass);


--
-- Name: history id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.history ALTER COLUMN id SET DEFAULT nextval('public.history_id_seq'::regclass);


--
-- Name: quiz id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.quiz ALTER COLUMN id SET DEFAULT nextval('public.quiz_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: general; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.general (id, question, choice_1, choice_2, choice_3, choice_4, answer) FROM stdin;
1	What is the first book of the Old Testament?	Leviticus	Exodus	Genesis	Numbers	Choice 3
2	In the video-game franchise Kingdom Hearts, the main protagonist, carries a weapon with what shape?	Key	Sword	Pen	Cellphone	Choice 1
4	On a dartboard, what number is directly opposite No. 1?	20	19	12	15	choice 2
5	Which American president appears on a one dollar bill?	Abraham Lincoln	Benjamin Franklin	Thomas Jefferson	CGeorge Washington	Choice 4
6	What is on display in the Madame Tussauds museum in London?	Wax sculptures	Vintage cars	Designer clothing	Unreleased film reels	Choice 1
7	Which one of these is not a typical European sword design?	Falchion	Flamberge	Scimitar	Ulfberht	Choice 3
8	Five dollars is worth how many nickles?	50	69	100	25	choice 3
9	What was the first ever London Underground line to be built?	Victoria Line	Metropolitan Line	Circle Line	Bakerloo Line	Choice 2
11	What is the closest planet to our solar systems sun?	Mars	Mercury	Jupiter	Earth	choice 2
3	In past times, what would a gentleman keep in his fob pocket?	Money	Keys	Notebook	Watch	Choice 4
10	Which candy is NOT made by Mars?	Almond Joy	M@Ms	Snickers	Twix	Choice 1
12	What is the name of NASAs most famous space telescope?	Hubble Space Telescope	Millenium Falcon	Death Star	Big Eye	Choice 1
\.


--
-- Data for Name: history; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.history (id, question, choice_1, choice_2, choice_3, choice_4, answer) FROM stdin;
1	Who discovered Penicillin?	Marie Curie	Alexander Flemming	Louis PasteurGreen	Alfred Nobel	Choice 2
2	How many manned moon landings have there been?	7	3	6	1	Choice 3
3	What was the first sport to have been played on the moon?	Golf	Football	Tennis	Soccer	Choice 1
4	When did the Battle of the Somme begin?	July 2nd, 1916	August 1st, 1916	June 30th, 1916	July 1st, 1916	Choice 4
5	Who led the Communist Revolution of Russia?	Joseph Stalin	Vladimir Putin	Vladimir Lenin	Mikhail Gorbachev	Choice 3
6	Which of the following was Brazil was a former colony under?	Spain	Portugal	The Netherlands	France	Choice 2
8	What was Manfred von Richthofens nickname?	The High Flying Ace	The Red Baron	The Blue Serpent	The Germany Gunner	Choice 2
9	Abolitionist John Brown raided the arsenal in which Virginia Town?	Richmond	Martinsburg	Harrisonburg	Harpers Ferry	Choice 4
10	In what year did the Great Northern War between Russia and Sweden end?	1721	1726	1727	1724	Choice 1
11	Which German field marshal was known as the Desert Fox?	Ernst Busch	Wolfram Freiherr von Richthofen	Wilhelm List	Erwin Romme	Choice 4
7	What year did the Northern War end?	1720	1726	1721	1725	Choice 1
\.


--
-- Data for Name: quiz; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.quiz (id, question, choice_1, choice_2, choice_3, choice_4, answer) FROM stdin;
5	What animal has 3 hearts	Earthworm	Octopus	Monkey	Elephant	Choice 2
89	What covers one third of the land’s surface, and helps to keep our planet healthy by storing carbon and producing oxygen?	Forests	Rivers	Grasslands	Deserts	
105	Which species young are described as Blackbacks?	Chimpanzee	Gorillas	Brown Bears	Jaguar	Choice 2
106	With their webbed feet and dense fur, which of these animals is perfectly adapted to life on the river?	Sealion	Otter	Walrus	Leopard Seal	Choice 2
69	What would you call the offspring of a whale?	Pup	Calf	Cub	Joey	Choice 2
108	What do you call a baby bat?	Cub	Chick	Pup	Kid	Choice 3
109	How many teeth does an adult rabbit have?	28	26	32	30	Choice 1
2	What colour is lobsters blood?	Red	Blue	Pink	Yellow	Choice 2
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.users (id, username, password, role) FROM stdin;
1	clare.user	$2y$10$XRbt4O/DSPNf4FZQAEEEkuNUiK3VqzL01KxgSLm5Zm7FQJv7n2a8C	Admin
6	fred.user	$2y$10$l5fzgwxkuISyyzpfxaVf6ezxouEciEk9w5RWeE4hpl9qpbjj0UGL6	Restricted
2	nicholas.user	$2y$10$zX5qxzQZuE7ogD2fa0D6yOzKAaqLMMTiTXaTcFOcpNtkyU5KcJc/q	Admin
5	joyce.user	$2y$10$zxQVh1tB213/eQofxD82O.pFSvvoG4iy1bwUzxVzIggMSg9ZFyLI.	Restricted
3	matt.user	$2y$10$wvmOR4tSxJJkXnzY63Kk4eVdk9jkEFAYJiTvOi2tL7AD4cQUTjOF2	View
4	dave.user	$2y$10$.5w.uC4An7EvRIEjnq6afuaYjctXZlM/TcCjy8/W1I2dsQjI0RN92	View
\.


--
-- Name: general_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.general_id_seq', 13, true);


--
-- Name: history_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.history_id_seq', 12, true);


--
-- Name: quiz_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.quiz_id_seq', 110, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.users_id_seq', 6, true);


--
-- Name: general general_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.general
    ADD CONSTRAINT general_pkey PRIMARY KEY (id);


--
-- Name: history history_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.history
    ADD CONSTRAINT history_pkey PRIMARY KEY (id);


--
-- Name: quiz quiz_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.quiz
    ADD CONSTRAINT quiz_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

