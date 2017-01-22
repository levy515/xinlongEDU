-- -----------------------------------------------------------------------
-- Table t_user				后台管理用户
-- -----------------------------------------------------------------------
DROP SEQUENCE IF EXISTS seq_admin_user CASCADE;
CREATE SEQUENCE seq_admin_user START 1;
DROP TABLE IF EXISTS t_admin_user CASCADE;
CREATE TABLE t_admin_user
(
	id						BIGINT UNIQUE DEFAULT NEXTVAL('seq_admin_user') NOT NULL ,
	username			VARCHAR(200) NOT NULL ,
	password			CHAR(32) NOT NULL ,
	name					VARCHAR(200) NOT NULL ,
	sex						BOOLEAN NOT NULL DEFAULT false ,
  tel						VARCHAR(200) DEFAULT '' ,
  mail					VARCHAR(200) DEFAULT '' ,
	permission		TEXT DEFAULT '' ,
	del						BOOLEAN NOT NULL DEFAULT false ,
	time					TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY (id)
);

INSERT INTO t_admin_user(username, password, name, sex, tel, mail, time) VALUES('admin','admin','管理员',TRUE,'','',TIMESTAMP '2017-01-01 00:00:00');
INSERT INTO t_admin_user(username, password, name, sex, tel, mail, time) VALUES('test','test','测试员',FALSE ,'','',TIMESTAMP '2017-01-01 00:00:00');

-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类
-- -----------------------------------------------------------------------
DROP SEQUENCE IF EXISTS seq_course_class CASCADE;
CREATE SEQUENCE seq_course_class START 1;
DROP TABLE IF EXISTS t_course_class CASCADE;
CREATE TABLE t_course_class
(
	id						BIGINT UNIQUE DEFAULT NEXTVAL('seq_course_class') NOT NULL ,
	fid				    BIGINT NOT NULL DEFAULT 0 ,
	name          VARCHAR(200) NOT NULL ,  --课程分类名称
	phase         VARCHAR(200) NOT NULL ,  --课程分类阶段
	level			    INTEGER NOT NULL DEFAULT 1 , 		-- 课程分类层数
  sort			    INTEGER NOT NULL DEFAULT 1000 , -- 课程分类排序
	del						BOOLEAN NOT NULL DEFAULT false ,
	time					TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	PRIMARY KEY (id)
);

INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('婴儿期','0~1岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level,time) VALUES('测试','111',1,TIMESTAMP '2017-01-22 00:00:00');









