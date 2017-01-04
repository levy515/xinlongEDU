-- -----------------------------------------------------------------------
-- Table t_user				职员
-- -----------------------------------------------------------------------
DROP SEQUENCE IF EXISTS seq_user CASCADE;
CREATE SEQUENCE seq_user START 1001;
DROP TABLE IF EXISTS t_user CASCADE;
CREATE TABLE t_user
(
	id						BIGINT UNIQUE DEFAULT NEXTVAL('seq_user') NOT NULL ,
	gid						BIGINT NOT NULL DEFAULT 0 ,
	oid						BIGINT NOT NULL DEFAULT 0 ,
	username			VARCHAR(200) NOT NULL ,
	pASsword			CHAR(32) NOT NULL ,
	name					VARCHAR(200) NOT NULL ,
	serial				VARCHAR(200) DEFAULT '' , 		 		-- 职员编号
	sex						BOOLEAN NOT NULL DEFAULT false ,  --flASe:男 true:女

  tel						VARCHAR(200) DEFAULT '' ,
  fax						VARCHAR(200) DEFAULT '' ,
  mail					VARCHAR(200) DEFAULT '' ,

	permission		TEXT DEFAULT '' ,
	lead					BOOLEAN NOT NULL DEFAULT false ,  --部门负责人
	admin					BOOLEAN NOT NULL DEFAULT false ,  -- 超级管理权限
	act						BOOLEAN NOT NULL DEFAULT true ,
	del						BOOLEAN NOT NULL DEFAULT false ,
	time					TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY (id)
);