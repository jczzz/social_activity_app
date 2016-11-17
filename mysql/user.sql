CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(128) NOT NULL,
  lastname varchar(128) NOT NULL,
  phonenum varchar(128),
  email varchar(128) NOT NULL,
  password varchar(256) NOT NULL,
  notes text,
  picture varchar(128) DEFAULT 'default_user_pic.jpg',
  PRIMARY KEY (id)
);

INSERT INTO users (id,firstname,lastname,phonenum,email,password,notes) VALUES(1,'admin','admin','7783166613','zgeng@sfu.ca','14789632','I am the admin');
