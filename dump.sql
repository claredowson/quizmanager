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
-- Name: quiz; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.quiz (
    id bigint NOT NULL,
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
-- Name: quiz id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.quiz ALTER COLUMN id SET DEFAULT nextval('public.quiz_id_seq'::regclass);


--
-- Data for Name: quiz; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.quiz (id, question, choice_1, choice_2, choice_3, choice_4, answer) FROM stdin;
1	What colour is Kermit the frog?	Red	Blue	Green	Yellow	Choice 3
2	What colour is lobsters blood?	Red	Blue	Pink	Yellow	Choice 2
3	What animal has the longest tongue?	Elephant	Monkey	Giraffe	Snake	Choice 3
4	What is the smallest bird?	Bee hummingbird	Ostrich	Wren	Sparrow	Choice 1
5	What animal has 3 hearts	Earthworm	Octopus	Monkey	Elephant	Choice 2
10	What animal has pink poo?	Flamingo	Blue Whale	Hippo	Polar Bear	
11	Which animal is the tallest?	Giraffe	Elephant	Camel	Ostrich	
15	jjgjkgkjkjbbb					
16	jjgjkgkjkjbbb					
29	What animal has pink poo?	Flamingo		Hippo	Ostrich	
43	Which animal is the tallest?	Flamingo				
47	What animal has pink poo?	Flamingo	Blue Whale	Hippo	Polar Bear	
50	Which animal is the tallest?	Flamingo	Blue Whale			
59	What is my name	Bob	Mark	Sam	Jack	
65	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
66	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
67	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
68	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
69	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
70	What is my name	Giraffe	Blue Whale	Hippo	Polar Bear	
71	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
72	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
73	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
74	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
75	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
76	What animal has pink poo?	Flamingo	Blue Whale	Camel	Ostrich	
77	Which animal is the tallest?	Giraffe	Emu	Hippo	Jack	
79	Which animal is the tallest?	Flamingo	Blue Whale	Hippo	Ostrich	
80	What animal has pink poo?	Flamingo	Elephant	Camel	Whale	
81	Hello	Flamingo	Elephant	Camel	Whale	
82	What is my name	Giraffe	Blue Whale	Hippo	Jack	
88	What animal has pink poo?	Flamingo	pink	Camel	Ostrich	
\.


--
-- Name: quiz_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.quiz_id_seq', 88, true);


--
-- Name: quiz quiz_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.quiz
    ADD CONSTRAINT quiz_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

