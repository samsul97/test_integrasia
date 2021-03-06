toc.dat                                                                                             0000600 0004000 0002000 00000024436 13615000535 0014446 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP       ,                     x            test_integrasia    12.1    12.1 (    4           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         5           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         6           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         7           1262    24609    test_integrasia    DATABASE     �   CREATE DATABASE test_integrasia WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Indonesian_Indonesia.1252' LC_CTYPE = 'Indonesian_Indonesia.1252';
    DROP DATABASE test_integrasia;
             
   integrasia    false         �            1259    24628    gps    TABLE     +  CREATE TABLE public.gps (
    brand character varying(100),
    model character varying(100),
    nama character varying(100),
    garansi character varying(100),
    tgl_beli date,
    tgl_jual date,
    deskripsi text,
    id integer NOT NULL,
    sold integer,
    foto character varying(100)
);
    DROP TABLE public.gps;
       public         heap 
   integrasia    false         �            1259    24677 
   gps_id_seq    SEQUENCE     �   CREATE SEQUENCE public.gps_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.gps_id_seq;
       public       
   integrasia    false    204         8           0    0 
   gps_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.gps_id_seq OWNED BY public.gps.id;
          public       
   integrasia    false    207         �            1259    24668    sold    TABLE     [   CREATE TABLE public.sold (
    id integer NOT NULL,
    name character varying NOT NULL
);
    DROP TABLE public.sold;
       public         heap    postgres    false         �            1259    24666    sold_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sold_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.sold_id_seq;
       public          postgres    false    206         9           0    0    sold_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.sold_id_seq OWNED BY public.sold.id;
          public          postgres    false    205         �            1259    24795    user    TABLE       CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(100) NOT NULL,
    password character varying(100) NOT NULL,
    id_user integer,
    id_user_role integer,
    status integer,
    token character varying(100) NOT NULL
);
    DROP TABLE public."user";
       public         heap    postgres    false         �            1259    24793    user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public          postgres    false    211         :           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
          public          postgres    false    210         �            1259    24623 
   user_panel    TABLE     �   CREATE TABLE public.user_panel (
    nama character varying(50),
    email character varying(100),
    telp character varying(50),
    foto character varying(100),
    id integer NOT NULL
);
    DROP TABLE public.user_panel;
       public         heap 
   integrasia    false         �            1259    24711    user_panel_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_panel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.user_panel_id_seq;
       public       
   integrasia    false    203         ;           0    0    user_panel_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.user_panel_id_seq OWNED BY public.user_panel.id;
          public       
   integrasia    false    208         �            1259    24618 	   user_role    TABLE     [   CREATE TABLE public.user_role (
    nama character varying(50),
    id integer NOT NULL
);
    DROP TABLE public.user_role;
       public         heap 
   integrasia    false         �            1259    24720    user_role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.user_role_id_seq;
       public       
   integrasia    false    202         <           0    0    user_role_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.user_role_id_seq OWNED BY public.user_role.id;
          public       
   integrasia    false    209         �
           2604    24679    gps id    DEFAULT     `   ALTER TABLE ONLY public.gps ALTER COLUMN id SET DEFAULT nextval('public.gps_id_seq'::regclass);
 5   ALTER TABLE public.gps ALTER COLUMN id DROP DEFAULT;
       public       
   integrasia    false    207    204         �
           2604    24671    sold id    DEFAULT     b   ALTER TABLE ONLY public.sold ALTER COLUMN id SET DEFAULT nextval('public.sold_id_seq'::regclass);
 6   ALTER TABLE public.sold ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    205    206         �
           2604    24798    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    211    211         �
           2604    24713    user_panel id    DEFAULT     n   ALTER TABLE ONLY public.user_panel ALTER COLUMN id SET DEFAULT nextval('public.user_panel_id_seq'::regclass);
 <   ALTER TABLE public.user_panel ALTER COLUMN id DROP DEFAULT;
       public       
   integrasia    false    208    203         �
           2604    24722    user_role id    DEFAULT     l   ALTER TABLE ONLY public.user_role ALTER COLUMN id SET DEFAULT nextval('public.user_role_id_seq'::regclass);
 ;   ALTER TABLE public.user_role ALTER COLUMN id DROP DEFAULT;
       public       
   integrasia    false    209    202         *          0    24628    gps 
   TABLE DATA           i   COPY public.gps (brand, model, nama, garansi, tgl_beli, tgl_jual, deskripsi, id, sold, foto) FROM stdin;
    public       
   integrasia    false    204       2858.dat ,          0    24668    sold 
   TABLE DATA           (   COPY public.sold (id, name) FROM stdin;
    public          postgres    false    206       2860.dat 1          0    24795    user 
   TABLE DATA           ^   COPY public."user" (id, username, password, id_user, id_user_role, status, token) FROM stdin;
    public          postgres    false    211       2865.dat )          0    24623 
   user_panel 
   TABLE DATA           A   COPY public.user_panel (nama, email, telp, foto, id) FROM stdin;
    public       
   integrasia    false    203       2857.dat (          0    24618 	   user_role 
   TABLE DATA           -   COPY public.user_role (nama, id) FROM stdin;
    public       
   integrasia    false    202       2856.dat =           0    0 
   gps_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.gps_id_seq', 5, true);
          public       
   integrasia    false    207         >           0    0    sold_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.sold_id_seq', 6, true);
          public          postgres    false    205         ?           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 2, true);
          public          postgres    false    210         @           0    0    user_panel_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.user_panel_id_seq', 3, true);
          public       
   integrasia    false    208         A           0    0    user_role_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.user_role_id_seq', 2, true);
          public       
   integrasia    false    209         �
           2606    24681    gps gps_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.gps
    ADD CONSTRAINT gps_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.gps DROP CONSTRAINT gps_pkey;
       public         
   integrasia    false    204         �
           2606    24804    user id 
   CONSTRAINT     G   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT id PRIMARY KEY (id);
 3   ALTER TABLE ONLY public."user" DROP CONSTRAINT id;
       public            postgres    false    211         �
           2606    24676    sold sold_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.sold
    ADD CONSTRAINT sold_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.sold DROP CONSTRAINT sold_pkey;
       public            postgres    false    206         �
           2606    24715    user_panel user_panel_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.user_panel
    ADD CONSTRAINT user_panel_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.user_panel DROP CONSTRAINT user_panel_pkey;
       public         
   integrasia    false    203         �
           2606    24724    user_role user_role_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public         
   integrasia    false    202         �
           2606    24802    user user_username_key 
   CONSTRAINT     W   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);
 B   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_username_key;
       public            postgres    false    211                                                                                                                                                                                                                                          2858.dat                                                                                            0000600 0004000 0002000 00000001202 13615000535 0014251 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        GT06N	Tracker	GPS Tracker GT06N	12	2020-01-29	2020-01-27	Paket GPS Tracker GT06N + Server + KARTU Perdana\r\nHarga ini SUDAH TERMASUK INSTALASI: JAKARTA SEL- TANGSEL - BOGOR & DEPOK\r\nDi luar Wilayah pemasangan diatas, Diskusi/ Japri kami dulu ya.\r\ndi tempat Anda.. Rumah/ Kantor dan dipasang oleh teknisi berpengalaman!\r\nPLUS.. PLUS..	1	2	\N
GT06N	Tracker	GPS Sygic	2	2020-01-29	2020-01-07	Tahan Lama	2	2	\N
GT06N	Tracker	Garmin GPS Map 64s	23	2020-01-22	2020-01-13	Kuat	3	3	\N
Tomtom	Garmin	GPS Tracker Garmin	5	2020-01-05	2020-01-07	Anti Air	4	1	\N
Apple Maps	Garmin	Garmin EtQrk	1	2020-01-28	2020-01-07	hau	5	2	1580463677_1.PNG
\.


                                                                                                                                                                                                                                                                                                                                                                                              2860.dat                                                                                            0000600 0004000 0002000 00000000046 13615000535 0014247 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        1	Personal
2	Perusahaan
3	Vendor
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          2865.dat                                                                                            0000600 0004000 0002000 00000000552 13615000535 0014256 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        1	nizom	$2y$13$WwFxTwkWK/AU4bDR1WMWgu4ZWSg7PP9hJNEJvmj9j9Cm1ZDojHx3a	0	1	1	yeJ4Zz59MYmBtorAjbyt65X6YUWVo7j7be_x_2185PJXehKlV-Eql22btMGHpSnnw-CN08PSWKOaEfgBruh9ChH09uqPGRXQEHQe
2	samsulhadi	$2y$13$MWZGcdoknQLmvu.svvBpSuN9j49ZeLpMd0ozpZGaLO6Hy9T.ZAuVq	3	2	1	jQEMqljFah-tmMgfknrD0TZIhbnadsmpfyqq0Eh-NkMP5LZefbIfzr1XYG5mzoIdaTfVpXZU3RpnEThuKanUdKxxf2YN6hqY676q
\.


                                                                                                                                                      2857.dat                                                                                            0000600 0004000 0002000 00000000354 13615000535 0014257 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        Samsul Hadi	samsulaculhadi@gmail.com	083148037336	1580457118_81272501_2775923499119976_4001295969378369536_n.jpg	2
Samsul Hadi	samsulaculhadis@gmail.com	083148037336	1580457733_81272501_2775923499119976_4001295969378369536_n.jpg	3
\.


                                                                                                                                                                                                                                                                                    2856.dat                                                                                            0000600 0004000 0002000 00000000031 13615000535 0014246 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        admin	1
userpanel	2
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       restore.sql                                                                                         0000600 0004000 0002000 00000021304 13615000535 0015362 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
-- Dumped by pg_dump version 12.1

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

DROP DATABASE test_integrasia;
--
-- Name: test_integrasia; Type: DATABASE; Schema: -; Owner: integrasia
--

CREATE DATABASE test_integrasia WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Indonesian_Indonesia.1252' LC_CTYPE = 'Indonesian_Indonesia.1252';


ALTER DATABASE test_integrasia OWNER TO integrasia;

\connect test_integrasia

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
-- Name: gps; Type: TABLE; Schema: public; Owner: integrasia
--

CREATE TABLE public.gps (
    brand character varying(100),
    model character varying(100),
    nama character varying(100),
    garansi character varying(100),
    tgl_beli date,
    tgl_jual date,
    deskripsi text,
    id integer NOT NULL,
    sold integer,
    foto character varying(100)
);


ALTER TABLE public.gps OWNER TO integrasia;

--
-- Name: gps_id_seq; Type: SEQUENCE; Schema: public; Owner: integrasia
--

CREATE SEQUENCE public.gps_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.gps_id_seq OWNER TO integrasia;

--
-- Name: gps_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: integrasia
--

ALTER SEQUENCE public.gps_id_seq OWNED BY public.gps.id;


--
-- Name: sold; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sold (
    id integer NOT NULL,
    name character varying NOT NULL
);


ALTER TABLE public.sold OWNER TO postgres;

--
-- Name: sold_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sold_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sold_id_seq OWNER TO postgres;

--
-- Name: sold_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sold_id_seq OWNED BY public.sold.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(100) NOT NULL,
    password character varying(100) NOT NULL,
    id_user integer,
    id_user_role integer,
    status integer,
    token character varying(100) NOT NULL
);


ALTER TABLE public."user" OWNER TO postgres;

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
-- Name: user_panel; Type: TABLE; Schema: public; Owner: integrasia
--

CREATE TABLE public.user_panel (
    nama character varying(50),
    email character varying(100),
    telp character varying(50),
    foto character varying(100),
    id integer NOT NULL
);


ALTER TABLE public.user_panel OWNER TO integrasia;

--
-- Name: user_panel_id_seq; Type: SEQUENCE; Schema: public; Owner: integrasia
--

CREATE SEQUENCE public.user_panel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_panel_id_seq OWNER TO integrasia;

--
-- Name: user_panel_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: integrasia
--

ALTER SEQUENCE public.user_panel_id_seq OWNED BY public.user_panel.id;


--
-- Name: user_role; Type: TABLE; Schema: public; Owner: integrasia
--

CREATE TABLE public.user_role (
    nama character varying(50),
    id integer NOT NULL
);


ALTER TABLE public.user_role OWNER TO integrasia;

--
-- Name: user_role_id_seq; Type: SEQUENCE; Schema: public; Owner: integrasia
--

CREATE SEQUENCE public.user_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_role_id_seq OWNER TO integrasia;

--
-- Name: user_role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: integrasia
--

ALTER SEQUENCE public.user_role_id_seq OWNED BY public.user_role.id;


--
-- Name: gps id; Type: DEFAULT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.gps ALTER COLUMN id SET DEFAULT nextval('public.gps_id_seq'::regclass);


--
-- Name: sold id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sold ALTER COLUMN id SET DEFAULT nextval('public.sold_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Name: user_panel id; Type: DEFAULT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.user_panel ALTER COLUMN id SET DEFAULT nextval('public.user_panel_id_seq'::regclass);


--
-- Name: user_role id; Type: DEFAULT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.user_role ALTER COLUMN id SET DEFAULT nextval('public.user_role_id_seq'::regclass);


--
-- Data for Name: gps; Type: TABLE DATA; Schema: public; Owner: integrasia
--

COPY public.gps (brand, model, nama, garansi, tgl_beli, tgl_jual, deskripsi, id, sold, foto) FROM stdin;
\.
COPY public.gps (brand, model, nama, garansi, tgl_beli, tgl_jual, deskripsi, id, sold, foto) FROM '$$PATH$$/2858.dat';

--
-- Data for Name: sold; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sold (id, name) FROM stdin;
\.
COPY public.sold (id, name) FROM '$$PATH$$/2860.dat';

--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, username, password, id_user, id_user_role, status, token) FROM stdin;
\.
COPY public."user" (id, username, password, id_user, id_user_role, status, token) FROM '$$PATH$$/2865.dat';

--
-- Data for Name: user_panel; Type: TABLE DATA; Schema: public; Owner: integrasia
--

COPY public.user_panel (nama, email, telp, foto, id) FROM stdin;
\.
COPY public.user_panel (nama, email, telp, foto, id) FROM '$$PATH$$/2857.dat';

--
-- Data for Name: user_role; Type: TABLE DATA; Schema: public; Owner: integrasia
--

COPY public.user_role (nama, id) FROM stdin;
\.
COPY public.user_role (nama, id) FROM '$$PATH$$/2856.dat';

--
-- Name: gps_id_seq; Type: SEQUENCE SET; Schema: public; Owner: integrasia
--

SELECT pg_catalog.setval('public.gps_id_seq', 5, true);


--
-- Name: sold_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sold_id_seq', 6, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 2, true);


--
-- Name: user_panel_id_seq; Type: SEQUENCE SET; Schema: public; Owner: integrasia
--

SELECT pg_catalog.setval('public.user_panel_id_seq', 3, true);


--
-- Name: user_role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: integrasia
--

SELECT pg_catalog.setval('public.user_role_id_seq', 2, true);


--
-- Name: gps gps_pkey; Type: CONSTRAINT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.gps
    ADD CONSTRAINT gps_pkey PRIMARY KEY (id);


--
-- Name: user id; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT id PRIMARY KEY (id);


--
-- Name: sold sold_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sold
    ADD CONSTRAINT sold_pkey PRIMARY KEY (id);


--
-- Name: user_panel user_panel_pkey; Type: CONSTRAINT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.user_panel
    ADD CONSTRAINT user_panel_pkey PRIMARY KEY (id);


--
-- Name: user_role user_role_pkey; Type: CONSTRAINT; Schema: public; Owner: integrasia
--

ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (id);


--
-- Name: user user_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            