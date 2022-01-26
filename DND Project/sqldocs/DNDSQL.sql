DROP DATABASE IF EXISTS DND;
CREATE DATABASE DND;

CREATE TABLE DND.USER(
	User_Name 		char(50),
	Phone_Number	char(12),
    email			text,
    
	PRIMARY KEY (User_Name)
);

CREATE TABLE DND.CAMPAIGN(
	Camp_Name		char(50),
	GM_Name			text,
    Number_Sessions	integer,
    
	PRIMARY KEY (Camp_Name)
);

CREATE TABLE DND.CHARACTER(
	Character_Name	char(50),
	race			text,
    gender			text,
	age				integer,
    lvl				integer,
    class			text,
    alignment		text,
    userID			char(50),
    camp_name		char(50),
    
	PRIMARY KEY (Character_Name),
    FOREIGN KEY (userID)
            	REFERENCES DND.USER(User_Name),
	FOREIGN KEY (camp_name)
				REFERENCES DND.CAMPAIGN(Camp_Name)
);

CREATE TABLE DND.EQUIPMENT(
	Character_Name	char(50),
	Fav_Weapon		text,
    GP_Equiv		integer,
    Health_Equip	text,
	Other_Info 		char(250),
    
	FOREIGN KEY (Character_Name)
				REFERENCES DND.CHARACTER(Character_Name)
                ON DELETE CASCADE
);



CREATE TABLE DND.BOSS(
	Boss_Name		char(50),
	Lvl				int,
	info			char(250),
	Camp_Name 		char(50),
    
	PRIMARY KEY (Boss_Name),
    	FOREIGN KEY(Camp_Name)
				REFERENCES DND.CAMPAIGN(Camp_Name)
                ON DELETE CASCADE
);

#users
INSERT INTO DND.USER
VALUES ('dburtonshaw0','387-402-9180','tsute0@wordpress.com');
INSERT INTO DND.USER
VALUES ('bmariaud1','795-705-9430','sfeehan1@rediff.com');
INSERT INTO DND.USER
VALUES ('dmccallion2', '937-606-4413','dkindred2@over-blog.com');
INSERT INTO DND.USER
VALUES ('hhart3', '666-471-5705','ccurro3@netscape.com');
INSERT INTO DND.USER
VALUES ('adupoy4','799-974-0281','cquilleash4@imageshack.us');
INSERT INTO DND.USER
VALUES ('mcritten5','270-901-9872','nwheaton5@blogspot.com');
INSERT INTO DND.USER
VALUES ('dcarillo6','207-256-9245','tloach6@umich.edu');
INSERT INTO DND.USER
VALUES ('lgoodlad7','704-473-8812','iackermann7@vimeo.com');
INSERT INTO DND.USER
VALUES ('wcotterel8','779-567-8465','wbucklee8@buzzfeed.com');
INSERT INTO DND.USER
VALUES ('mglasscott9','153-978-5054','zdaenen9@bbc.co.uk');

#campaign

INSERT INTO DND.CAMPAIGN 
VALUES ('Woody''s Finest Hour', 'Sam', 12);
INSERT INTO DND.CAMPAIGN 
VALUES ('Rage of Demons', 'Gary', 45);
INSERT INTO DND.CAMPAIGN 
VALUES ('The Lord of Flame','Tom' ,8);
INSERT INTO DND.CAMPAIGN 
VALUES ('The Mesh', 'Sheila', 0);
INSERT INTO DND.CAMPAIGN 
VALUES ('Wilson Game', 'Alice', 3);

#characters

INSERT INTO DND.CHARACTER
VALUES ('Elen Inaroris', 'Elf', 'F', 213, 8, 'Paladin 6/Cleric 2', 'LG', 'dburtonshaw0', 'Woody''s Finest Hour');
INSERT INTO DND.CHARACTER
VALUES ('Umilmaes Blackbelt', 'Dwarf', 'M', 123, 15, 'Monk 12/Warlock 1/Enlightened Fist 2', 'TN', 'bmariaud1', 'The Lord of Flame');
INSERT INTO DND.CHARACTER
VALUES ('Respen Cainorin', 'Elf', 'M', 344, 10, 'Wizard 10', 'LE', 'dmccallion2', 'The Lord of Flame');
INSERT INTO DND.CHARACTER
VALUES ('Kamdath Shatterborn', 'Dwarf', 'M', 101, 14, 'Barbarian 14', 'CG', 'hhart3', 'The Mesh');
INSERT INTO DND.CHARACTER
VALUES ('Jean-Yves Demaret', 'Human', 'M', 17, 3, 'Fighter 1/Sorcerer 2', 'CE', 'adupoy4', 'The Mesh');
INSERT INTO DND.CHARACTER
VALUES ('Ivasaar Dakrana', 'Elf', 'F', 435, 8, 'Rogue 7/Shadowdancer 1', 'NE', 'mcritten5', 'Woody''s Finest Hour');
INSERT INTO DND.CHARACTER
VALUES ('Jarhaeni Bristlehand', 'Dwarf', 'F', 140, 3, 'Cleric 3', 'NG', 'dcarillo6', 'Wilson Game');
INSERT INTO DND.CHARACTER
VALUES ('Wistari Grewynn', 'Elf', 'F', 121, 8, 'Barbarian 4/Bard 4', 'LN', 'lgoodlad7', 'Wilson Game');
INSERT INTO DND.CHARACTER
VALUES ('Emmanuel Bonnot', 'Human', 'M', 35, 13, 'Artificer 6/Wizard 7', 'CN', 'wcotterel8', 'Wilson Game');
INSERT INTO DND.CHARACTER
VALUES ('John Smith', 'Human', 'M', 28, 15, 'Fighter 15', 'TN', 'mglasscott9', 'Woody''s Finest Hour');

#equipment

INSERT INTO DND.EQUIPMENT 
VALUES ('Elen Inaroris', 'Warhammer +2', 67880, 'Potion of healing x 1', 'rope, mirror, waterskin, rations, plate mail');
INSERT INTO DND.EQUIPMENT 
VALUES ('Umilmaes Blackbelt', 'Quarterstaff +5/Fists', 55462, 'Potion of healing x 3', 'rope, mirror, waterskin, rations, leather armor');
INSERT INTO DND.EQUIPMENT 
VALUES ('Respen Cainorin', 'Dagger of the Deep', 40090, 'Potion of healing x 5', 'rope, mirror, waterskin, rations, scale mail');
INSERT INTO DND.EQUIPMENT 
VALUES ('Kamdath Shatterborn', 'The Stormbringer', 60996, 'Potion of healing x 7', 'rope, mirror, waterskin, rations, breastplate');
INSERT INTO DND.EQUIPMENT 
VALUES ('Jean-Yves Demaret', 'Longsword', 154, 'Potion of healing x 13', 'rope, mirror, waterskin, rations, plate mail');
INSERT INTO DND.EQUIPMENT 
VALUES ('Ivasaar Dakrana', 'Assassin Hand crossbow', 82235, 'Potion of healing x 2', 'rope, mirror, waterskin, rations, hide armor');
INSERT INTO DND.EQUIPMENT 
VALUES ('Jarhaeni Bristlehand', 'Halberd', 875, 'Potion of healing x 31', 'rope, mirror, waterskin, rations, studded leather armor');
INSERT INTO DND.EQUIPMENT 
VALUES ('Wistari Grewynn', 'Zweihander +2', 50644, 'Potion of healing x 14', 'rope, mirror, waterskin, rations, cloth armor');
INSERT INTO DND.EQUIPMENT 
VALUES ('Emmanuel Bonnot', 'Storm repeating crossbow + 4', 80977, 'Potion of healing x 3', 'rope, mirror, waterskin, rations, plate mail');
INSERT INTO DND.EQUIPMENT 
VALUES ('John Smith', 'Lightbringer', 77426, 'Potion of healing x 99', 'rope, mirror, waterskin, rations, plate mail');

#boss

INSERT INTO DND.BOSS
VALUES ('Gos-Shalik', 21, 'Powerful and ancient lich, intent on bringing about the end of humanity.', 'Woody''s Finest Hour');
INSERT INTO DND.BOSS
VALUES ('Demogorgon', 26, 'Demon lord, summoned to the material plane and only interested in destruction.', 'Rage of Demons');
INSERT INTO DND.BOSS
VALUES ('Ignis', 20, 'Ancient fire elemental, interested in eating the planet core to challenge the gods.', 'The Lord of Flame');
INSERT INTO DND.BOSS
VALUES ('Gylon', 30, 'She''s a pirate wizard beholder; she only wants to gain entrance to the Pylon.', 'The Mesh');
INSERT INTO DND.BOSS
VALUES ('The Kraken', 23, 'This primordial god of the sea wants to consume all of the land on Primaris.', 'Wilson Game');