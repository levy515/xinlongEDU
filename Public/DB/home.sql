-- -----------------------------------------------------------------------
-- Table t_member_user				会员用户
-- -----------------------------------------------------------------------
DROP SEQUENCE IF EXISTS seq_member_user CASCADE;
CREATE SEQUENCE seq_member_user START 1;
DROP TABLE IF EXISTS t_member_user CASCADE;
CREATE TABLE t_member_user
(
	id						BIGINT UNIQUE DEFAULT NEXTVAL('seq_member_user') NOT NULL ,

	username			VARCHAR(200) NOT NULL ,         --登录用户名
	password			VARCHAR(50) NOT NULL ,          --登录密码
	chname				VARCHAR(200) NOT NULL ,         --中文名
	enname				VARCHAR(200) NOT NULL ,         --英文名
	del						BOOLEAN NOT NULL DEFAULT false ,  --删除
	time					TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY (id)
);

INSERT INTO t_member_user(username, password, chname, enname, time) VALUES('test','123456','ctest','etest',TIMESTAMP '2011-01-01 00:00:00');


-- -----------------------------------------------------------------------
-- Table t_product				商品
-- -----------------------------------------------------------------------
DROP SEQUENCE IF EXISTS seq_product CASCADE;
CREATE SEQUENCE seq_product START 1;
DROP TABLE IF EXISTS t_product CASCADE;
CREATE TABLE t_product
(
	id			    BIGINT UNIQUE DEFAULT NEXTVAL('seq_product') NOT NULL ,
	fid				  BIGINT NOT NULL DEFAULT 0 ,
	c1id        BIGINT NOT NULL DEFAULT 0 ,     --一级分类
	c2id        BIGINT NOT NULL DEFAULT 0 ,     --二级分类
	bid         BIGINT NOT NULL DEFAULT 0 ,     --品牌ID
	pic					TEXT DEFAULT '' ,  		          --图片路径
	name			  VARCHAR(500) NOT NULL ,         --商品名称
	title				VARCHAR(500) DEFAULT '' , 		  --商品标题
	place				VARCHAR(200) DEFAULT '' , 		  --商品原产地
	price				NUMERIC(20, 2) DEFAULT NULL ,	  --市场价
	discount    NUMERIC(20, 2) DEFAULT NULL ,	  --折扣价
	descripts		TEXT DEFAULT '' , 			 			  --商品详情
	params			TEXT DEFAULT '' , 			 			  --商品参数
	packages		TEXT DEFAULT '' , 			 			  --商品评论
	memo				TEXT DEFAULT '' , 			 			  --备注
	state				BOOLEAN NOT NULL DEFAULT true , -- true:在售 false:不售
	del					BOOLEAN NOT NULL DEFAULT false ,
	time				TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY (id)
);

INSERT INTO t_product(c1id, c2id, name, title, place, price, discount, descripts, params, packages) VALUES(1,9,'商品名称','商品标题','上海',100.00,200.00,'商品详情','商品参数','商品评论');
INSERT INTO t_product(c1id, c2id, name, title, place, price, discount, descripts, params, packages) VALUES(1,9,'商品名称2','商品标题2','上海',100.00,200.00,'商品详情2','商品参数2','商品评论2');
