create database if not exists font_store;
use font_store;
create table if not exists  font_store(
    id INT AUTO_INCREMENT PRIMARY KEY,
    font_name VARCHAR(100),
    preview VARCHAR(100),
    font_size VARCHAR(100),
    font_path VARCHAR(100),
    font_type VARCHAR(100),
);

create table if not exists group_store (
    id INT AUTO_INCREMENT PRIMARY KEY,
    group_name VARCHAR(100),
    all_fonts VARCHAR(100)
);