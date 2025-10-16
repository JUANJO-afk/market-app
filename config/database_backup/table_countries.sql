CREATE TABLE users(
            id_country BIGSERIAL FOREIGN KEY,
            countryname VARCHAR(30) NOT NULL,
            cabbrev VARCHAR(30) NOT NULL,
            created_at TIMESTAMPTZ NOT NULL DEFAULT now(),
            updated_at TIMESTAMPTZ NOT NULL DEFAULT now(),
            deleted_at TIMESTAMPTZ NULL


);

insert into countries (id_country,countryname,cabbrev) 
values('57','Colombia','COL');