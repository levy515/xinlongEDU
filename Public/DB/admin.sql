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

-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-一级分类
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('婴儿期','0~1岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('幼儿期','1~3岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('学龄前期','3~6岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('小学','6~12岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('初中','13~15岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('高中','16~18岁',1,1000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(name, phase, level, sort,time) VALUES('VIP学习中心','',1,1000,TIMESTAMP '2017-01-22 00:00:00');

-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-婴儿期
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'成长','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'语言','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'表情','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'图像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'动作','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(1,'食物','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-幼儿期
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'语言','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'动作','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'礼仪','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'表情','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'图像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(3,'食物','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-学龄前期
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'语言','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'手工','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'动作','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'礼仪','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'表情','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'图像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(4,'食物','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-小学
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'课程','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'手工','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'运动','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'礼仪','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(5,'影像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-初中
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'课程','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'手工','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'运动','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'礼仪','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(6,'影像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-高中
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'课程','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'手工','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'运动','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'礼仪','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'声音','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(7,'影像','',2,2000,TIMESTAMP '2017-01-22 00:00:00');
-- -----------------------------------------------------------------------
-- Table t_course_class				商品管理-课程分类-二级分类-VIP学习中心
-- -----------------------------------------------------------------------
INSERT INTO t_course_class(fid, name, phase, level, sort,time) VALUES(8,'学习中心','',2,2000,TIMESTAMP '2017-01-22 00:00:00');







