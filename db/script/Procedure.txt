CREATE or REPLACE PROCEDURE SpInsertMasterData()

BEGIN

INSERT INTO company (comname, address, comweb, phone, email, rheader, rpolicy,image) VALUES ('POS Solutions', 'House No: 6/G/3 (6th Floor), Suchoma Community Center, Ringroad, Dhaka', 'www.pos-solution.com', '01810047393', 'support@pos-solution.com', 'POS Solutions', 'Company Return Policy','17897-1688963984.png');

INSERT INTO roles (role_name, sts) VALUES ('Administrator', '1'), ('Sales Man', '1'), ('User', '1');

INSERT INTO users (user_name, display_name, email, role_id, sts, user_password, user_con_password, user_id)
VALUES 
('rafi', 'Mojahid Rafi', 'mojahid.rafi17@gmail.com 	', '1', '1', 'rafi@123', 'rafi@123', '1'),
('shoyab', 'Abu Mansur', 'mansur@gmail.com', '1', '1', '12345', '12345', '2'),
('sajib', 'Md. Sajib', 'sajib@gmail.com', '1', '1', '12345', '12345', '3');

END

//