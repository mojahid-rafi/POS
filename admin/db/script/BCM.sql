CREATE TABLE donors_info (
id INT AUTO_INCREMENT not null PRIMARY KEY,
name VARCHAR(150) not null DEFAULT '',
gender VARCHAR(30) not null DEFAULT '',
blood_group VARCHAR(30) not null DEFAULT '',
dob VARCHAR(30) null,
phone VARCHAR(15) not null DEFAULT '',
alt_phone VARCHAR(15) not null DEFAULT '',
email VARCHAR(50) not null DEFAULT '',
division_id VARCHAR(30) not null DEFAULT '',
district_id VARCHAR(30) not null DEFAULT '',
thana_id VARCHAR(30) not null DEFAULT '',
area VARCHAR(50) not null DEFAULT '',
pwd VARCHAR(30) not null DEFAULT '',
sts VARCHAR(30) not null DEFAULT '',
last_dona_date DATETIME null,
club_id varchar(20) not null DEFAULT '',
created_at timestamp DEFAULT CURRENT_TIMESTAMP,
updated_at DATETIME null
);

#--------------------------------------------------------------------

CREATE TABLE Blood_Donation(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    Donor_id INT not null,
    Don_date DATETIME null,
    Hospital_Name VARCHAR(50) not null,
    Address VARCHAR(150) not null, 
    Createdat timestamp DEFAULT CURRENT_TIMESTAMP,
    Updatedat DATETIME null

);


#------------------------------------------------------------------


CREATE TABLE Request_Blood(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    Request_From VARCHAR(50) not null,
    The_Date DATETIME null,
    Patient_Name VARCHAR(50) not null,
    Blood_Group VARCHAR(15) not null,
    No_of_Unit INT not null,
    Donation_Date DATETIME null,
    Days_Left INT not null DEFAULT 0,
    Loc_Info VARCHAR(150) not null,
    Create_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Update_At DATETIME null
);


#-----------------------------------------------------------------

CREATE TABLE users(
	id INT AUTO_INCREMENT not null PRIMARY KEY,
    name VARCHAR(50) not null,
    email VARCHAR(50) not null,
    phone VARCHAR(15) not null,
    pwd VARCHAR(10) not null,
    sts INT not null,
    role VARCHAR(50) not null,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at DATETIME null
);


#--------------------------------------------------------------------


CREATE TABLE Blood_Club_Info(
	ID INT AUTO_INCREMENT not null PRIMARY KEY,
    Club_Name VARCHAR(150) not null,
    Founder VARCHAR(150) not null,
    Phone VARCHAR(15) not null,
    Email VARCHAR(50) not null,
    Division VARCHAR(150) not null,
    District VARCHAR(50) not null,
    Thana VARCHAR(50) not null,
    Area VARCHAR(150) not null,
    Createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Updatedat DATETIME null

);


#---------------------------------------------------------------------


CREATE TABLE Feedback(
	id INT AUTO_INCREMENT not null PRIMARY KEY,
    Name VARCHAR(150) not null,
    Feedback TEXT not null,
    Createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Updatedat DATETIME null

);

#--------------------------------------------------------------------------


CREATE TABLE Complaint(
    id INT AUTO_INCREMENT not null primary key,
    Name VARCHAR(150) not null,
    Subject VARCHAR(50) not null,
    Description TEXT not null,
    Feedback TEXT not null,
    Createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Updatedat DATETIME null
);


#-------------------------------------------------------------------


CREATE TABLE Campaign_Request(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    ClubID INT not null,
    Division VARCHAR(50) not null,
    District VARCHAR(50) not null,
    Thana VARCHAR(50) not null,
    LocationType VARCHAR(50) not null,
    LocName VARCHAR(50) not null,
    ApxTestCount INT not null

);


#----------------------------------------------------------------------


CREATE TABLE Division(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    Division_Name VARCHAR(50) not null 
);

#--------------------------------------------------------------------


CREATE TABLE District(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    Division_ID INT not null,
    District_Name VARCHAR(50) not null

);


#-------------------------------------------------------------------------


CREATE TABLE Thana(
    ID INT AUTO_INCREMENT not null PRIMARY KEY,
    District_ID INT not null,
    Name VARCHAR(150) not null
);


    