alter table Forum add column forum_id int;

alter table Forum add foreign key(forum_id) REFERENCES Forum(id);
