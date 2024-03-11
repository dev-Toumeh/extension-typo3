CREATE TABLE tx_cars_car (
    manufacturer varchar(50) DEFAULT '' NOT NULL,
    model varchar(20) DEFAULT '' NOT NULL,
    ps int(5) DEFAULT '0' NOT NULL
);

-- CREATE TABLE tx_teams (
--     team_name varchar(50) DEFAULT '' NOT NULL,
--     establish_year int(4) DEFAULT 0 NOT NULL,
--     Champions_League_trophies int(4) DEFAULT 0 NOT NULL
-- );
--
-- CREATE TABLE tx_teams_trophies (
--     label varchar(50) DEFAULT '' NOT NULL,
--     champions_League_trophies int(2) DEFAULT 0 NOT NULL
-- );