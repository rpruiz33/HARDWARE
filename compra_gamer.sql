create database if not exists compra_gamer;
use compra_gamer;
--
DROP TABLE IF EXISTS compra_gamer.articulos;
DROP TABLE IF EXISTS compra_gamer.clientes;
DROP TABLE IF EXISTS compra_gamer.articulos;
DROP TABLE IF EXISTS compra_gamer.user;


CREATE TABLE IF NOT EXISTS articulos (
  nombre varchar(100) ,
  descripcion varchar(100) NOT NULL,
  precio varchar(100) NOT NULL,
  id int (255) primary key,
  imagen varchar(300) NOT NULL,
  stock varchar(223) not null
);

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dni` varchar(200) not NULL,

  PRIMARY KEY (`id`)
) ;

CREATE TABLE user (
  id int(11) NOT NULL primary key,
  usuario varchar(255) NOT NULL,
  pass varchar(255) NOT NULL,
  tipo_cliente tinyint(4) NOT NULL
);

INSERT INTO user (id, usuario, pass, tipo_cliente) VALUES
(1, 'lopez', '123', 2),
(2, 'tio', '123', 1);

INSERT INTO articulos (nombre, descripcion, precio, id, imagen, stock ) VALUES
("Procesador Celeron" , "Procesador Barato 1600Z", "$20000",33,
"compragamer_Imganen_general_27562_Procesador_Intel_Celeron_G5925_3_6GHz_Socket_1200_Comet_Lake_764c73ec-grn4.jpg","23 unidades"),
("Rizen 7 5600g" , "Muy buen Procesador", '$50000',11,
"compragamer_Imganen_general_22302_Procesador_AMD_Ryzen_9_5950X_4.9GHz_Turbo_AM4_-_No_incluye_Cooler_9d34d3b3-grn.jpg",'35 unidades'),
("Notebook Gamer" , "Ideal para Juegos", '$2000000',23,
"compragamer_Imganen_general_32941_Notebook_Gamer_ASUS_TUF_FX506_FHD_IPS_15.6__Core_i5_10300H_8GB_512GB_SSD_NVMe_GTX_1650_Freedos_144Hz_a4f7ad98-grn.jpg",'40 unidades'),
("Gabinete Xfactor" , "Gabinete de Alto Rendimiento", '$90000',24,
"compragamer_Imganen_general_35714_Gabinete_Antec_NX292_MESH_RGB_Vidrio_Templado_a017a79f-grn.jpg",'30 unidades'),
("Ram Xfactor " , "DDR5 3600hz", '$323232',25,
"compragamer_Imganen_general_36913_Memoria_Adata_DDR4_16GB__2x8GB__4133MHz_XPG_Spectrix_D60G_RGB_73bb84d3-grn.jpg",'29 unidades'),
("fuente Nisuta" , "Fuente Gamer alto Poder", '$26000',26,
"compragamer_Imganen_general_37664_Fuente_Redragon_600W_80_Plus_Bronze_GCPS002_c053508f-grn.jpg",'28 unidades'),
("Procesador Rizen 5" , "Buen procesador y economico", '$30000',27, "descarga1.jpeg",'28 unidades'),

("Memoria RAM Patriot" , "excelente Rendimiento", '$20000',28,
"compragamer_Imganen_general_23475_Memoria_GeiL_DDR4_16GB__2x8GB__3600MHz_Orion_Red_RGB_2a713588-grn.jpg",'50 unidades'),
("Procesador RIzen 9" , "buen procesador", '$200000',29,
"compragamer_Imganen_general_35942_Procesador_AMD_Ryzen_7_7700X_5.4GHz_Turbo_AM5_OEM_C_VIDEO_acc67d24-grn.jpg",'24 unidades'),
("Mother Gigabyte" , "Altisimo Rendimiento", '$500000',30,
"compragamer_Imganen_general_37531_Mother_GIGABYTE_X570SI_AORUS_PRO_AX_AM4_Mini_ITX_DDR4_27e162fa-grn.jpg",'10 unidades');
INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `dni`) VALUES
(1, 'Jessica', 'Mendez','yeyiimendez@gmail.com', '42233652'),
(2, 'Manuela', 'Di Palma','di@gmail.com', '8888888'),
(3, 'Roberto','Eliban','elshabes@gmail.com','123344'),
(4, 'Antonio','Garcez','garcesito@gmail.com','33445566');