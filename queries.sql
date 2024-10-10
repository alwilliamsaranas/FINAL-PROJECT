CREATE DATABASE light_sensor_system;

USE light_sensor_system;

CREATE TABLE light_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(10),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE light_schedule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    start_time TIME,
    end_time TIME,
);

INSERT INTO light_schedule (start_time, end_time)
value ('18:00:00' , '06:00:00');