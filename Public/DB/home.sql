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
