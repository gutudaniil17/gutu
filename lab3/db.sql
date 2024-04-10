CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(50) NOT NULL
);

INSERT INTO user (login, password, role) VALUES
('admin', 'adminpassword', 'admin'),
('manager', 'managerpassword', 'manager');
