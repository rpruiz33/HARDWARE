create database if not exists compra_gamer;
use compra_gamer;
--
DROP TABLE IF EXISTS compra_gamer.articulos;
DROP TABLE IF EXISTS compra_gamer.clientes;
DROP TABLE IF EXISTS compra_gamer.articulos;
DROP TABLE IF EXISTS compra_gamer.user;


CREATE TABLE articulos (
  nombre varchar(100) ,
  descripcion varchar(100) NOT NULL,
  precio double NOT NULL,
  id int	(255) NOT NULL,
  imagen varchar(300) NOT NULL
);

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dni` varchar(200) not NULL,
  `clave` varchar(255) not NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE user (
  id int(11) NOT NULL primary key,
  usuario varchar(255) NOT NULL,
  pass varchar(255) NOT NULL,
  tipo_cliente tinyint(2) NOT NULL
);

INSERT INTO user (id, usuario, pass, tipo_cliente) VALUES
(1, 'lopez', '123', 0),
(2, 'tio', '', 1);

INSERT INTO articulos (nombre, descripcion, precio, id, imagen) VALUES
("procesador celeron" , "procesador barato", 20000,1,
"compragamer_Imganen_general_27562_Procesador_Intel_Celeron_G5925_3_6GHz_Socket_1200_Comet_Lake_764c73ec-grn4.jpg"),
("Rizen 7" , "buen procesador", 50000,2,
"compragamer_Imganen_general_22302_Procesador_AMD_Ryzen_9_5950X_4.9GHz_Turbo_AM4_-_No_incluye_Cooler_9d34d3b3-grn.jpg"),
("Notebook Gamer" , "ideal para juegos", 2000000,3,
"compragamer_Imganen_general_32941_Notebook_Gamer_ASUS_TUF_FX506_FHD_IPS_15.6__Core_i5_10300H_8GB_512GB_SSD_NVMe_GTX_1650_Freedos_144Hz_a4f7ad98-grn.jpg"),
("Gabinete Xfactor" , "gabinete de alto rendimiento", 90000,4,
"compragamer_Imganen_general_35714_Gabinete_Antec_NX292_MESH_RGB_Vidrio_Templado_a017a79f-grn.jpg"),
("Ram Xfactor " , "DDR5", 323232,5,
"compragamer_Imganen_general_36913_Memoria_Adata_DDR4_16GB__2x8GB__4133MHz_XPG_Spectrix_D60G_RGB_73bb84d3-grn.jpg"),
("fuente Nisuta" , "fuente camer", 26000,6,
"compragamer_Imganen_general_37664_Fuente_Redragon_600W_80_Plus_Bronze_GCPS002_c053508f-grn.jpg"),
("Procesador Rizen 5" , "buen procesador", 30000,7,
"descarga1.jpeg"),
("Memoria RAM Patriot" , "excelente rendimiento", 20000,8,
"compragamer_Imganen_general_23475_Memoria_GeiL_DDR4_16GB__2x8GB__3600MHz_Orion_Red_RGB_2a713588-grn.jpg"),
("Procesador RIzen 9" , "buen procesador", 200000,9,
"compragamer_Imganen_general_35942_Procesador_AMD_Ryzen_7_7700X_5.4GHz_Turbo_AM5_OEM_C_VIDEO_acc67d24-grn.jpg"),
("Mother Gigabyte" , "alto rendimiento", 500000,10,
"compragamer_Imganen_general_37531_Mother_GIGABYTE_X570SI_AORUS_PRO_AX_AM4_Mini_ITX_DDR4_27e162fa-grn.jpg");
INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `dni`, `clave`) VALUES
(42, 'jessica', 'mendez', '42233652', 'yeyiimendez@gmail.com', NULL),
(60, 'manuela', 'castañeira', '8888888', 'fteizquiera@arg.com', '');