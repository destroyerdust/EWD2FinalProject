CREATE TABLE `bike` (
	`bikeId` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`price` VARCHAR(50) NULL DEFAULT NULL,
	`imgName` VARCHAR(50) NULL DEFAULT NULL,
	`description` VARCHAR(1000) NULL DEFAULT NULL,
	`feature1` VARCHAR(200) NULL DEFAULT NULL,
	`feature2` VARCHAR(200) NULL DEFAULT NULL,
	`feature3` VARCHAR(200) NULL DEFAULT NULL,
	`feature4` VARCHAR(200) NULL DEFAULT NULL,
	PRIMARY KEY (`bikeId`)
)
COMMENT='This is a bike info'
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=6
;

INSERT INTO `bike` (`name`, `price`, `imgName`, description, feature1, feature2, feature3, feature4) VALUES ('1-Series', '930', '1-series.png', '1 Series aluminum road bikes feature the same aero shaping and race-ready detail as our top-end bikes. They\'re strong, light, and built to fly over the pavement.', 'Nothing rides like a Trek', 'Top-level Spec', 'Advanced Aluminum Frame', 'All-Weather Versatility');
INSERT INTO `bike` (`name`, `price`, `imgName`, description, feature1, feature2, feature3, feature4) VALUES ('Madone', '1320', 'madone.png', 'Madone is race-bike royalty. This incredible frame combines a super-aero shape with a phenomenally light, stiff ride feel that wins on any terrain.', 'Super-Aero Frame', 'Tour-Winning Tech', 'No Compromise', 'Pro-Level Ride');
INSERT INTO `bike` (`name`, `price`, `imgName`, description, feature1, feature2, feature3, feature4) VALUES ('Emonda', '1650', 'emonda.png', 'Every detail of the Emonda line, from frame design to each component choice on every model, serves the same audacious goal: to create the lightest line of production road bikes ever offered. Emonda has everything the ALR model does but with the added OCLV Carbon Technology and Ride-tuned Performance', 'Ultra Lightweight', 'OCLV Carbon Technology', 'Ride-tuned Performance', 'Lifetime Warranty');
INSERT INTO `bike` (`name`, `price`, `imgName`, description, feature1, feature2, feature3, feature4) VALUES ('Emonda-ALR', '990', 'emonda-alr.png', 'Every detail of the Emonda line, from frame design to each component choice on every model, serves the same audacious goal: to create the lightest line of production road bikes ever offered. A more budget friendly model with great features.', 'Ultra Lightweight', 'Advanced Aluminum Frame', 'Invisible Weld Technology', 'Lifetime Warranty');
INSERT INTO `bike` (`name`, `price`, `imgName`, description, feature1, feature2, feature3, feature4) VALUES ('Domane', '1430', 'domane.png', 'Domane with IsoSpeed has it all: Blistering speed. Incredible race comfort and stability, even on the punishing pave of Flanders and Roubaix. Dont endure. Conquer.', 'Smooth IsoSpeed Decoupler', 'Efficient', 'Stable', 'Caliper or Disc Brakes');
