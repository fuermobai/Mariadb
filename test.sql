use myemployees;
show tables;
show columns from products_tbl;
insert into products_tbl values # 插入数据
	(5000,'a','A','2020-04-12'),/* values后面是不能和python一样，用大括号把所有包含，而是直接并列，各个内容用()包络，然后用,号隔开即可 */
    (6000,'b','B','2020-04-12'),
    (7000,'c','C','2020-04-12'),
    (4000,'d','D','2020-04-12')
    ; 
select * from products_tbl;