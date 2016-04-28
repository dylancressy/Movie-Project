INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'test', 'test@testmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'charlesli', '123@bc.edu', '040b7cf4a55014e185813e0644502ea9'),
(3, 'alabama amba', 'alabma@bc.edu', 'c96dd568316deb9d8c7dec73b4c27cbb'),
(4, 'pikachu', 'pika@bc.edu', 'b8f78c9547701c3ab0d6d809cb05252a');

INSERT INTO `favs`(`user_id`, `favorite_genre`, `favorite_language`, `all_time_favorite`) VALUES 
(1,'action','English','fast and furious'),
(2,'romance','German','Titanic'),
(3,'action','English','2 Guns'),
(4,'horror','English','The Ring');
(

INSERT INTO `recently_watched`(`user_id`, `movie`) VALUES 
(1,'Zootpoia'),
(2,'The Mermaid'),
(3,'Daddy is Home'),
(4,'10 Cloverfiled Lane');

INSERT INTO `bookmarked`(`user_id`, `bookmarked1`, `bookmarked2`, `bookmarked3`, `bookmarked4`)VALUES
(1,'Zootopia','Everybody wants some','The Conjuring','Scary Movie I'),
(2,'Life of Pi','Everybody wants some','','Forrest Gump'),
(3,'1984','Animal Farm','The Mighty Python',''),
(4,'10 Cloverfiled Lane','Everybody want some','The Conjuring','');

INSERT INTO `rating`(`website_quality`, `helpfulness`, `would_recommend`) VALUES 
('superb','very helpful!','yes'),
('meh','meh','yes'),
('good','more movies would be better','yes'),
('well designed','very helpful!','yes')





