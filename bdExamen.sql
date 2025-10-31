-- drop database bd_almacen;
-- ---------------------------------------------------------------
-- PRACTICA DE INGENIERIA INVERSA EN BD
-- ---------------------------------------------------------------
-- 1.- REUNIRSE EN EQUIPOS DE 3 INTEGRANTES
-- 2.- CREAR LA BD_PROSOFT EN MYSQL
-- 3.- VERIFICAR EL SCRIPT PARA QUE SE PUEDA GENERAR LA BD
-- 4.- INSERTAR 5 REGISTROS SOLO EN LAS TABLAS TIPO CATALOGO: 
--     CLIENTE, MODELO, FAMILIA, ARTICULO
--     LOS ARTICULOS, FAMILIAS Y MODELOS DEBERAN SER SOBRE HARDWARE, SOFTWARE, 
--     SERVICIOS EN CLOUDCOMPUTING, ETC.
-- 5.- AGREGAR EN ESTE SCRIPT EL CODIGO DE CREACION DE TABLAS E INSERCIONES
--     DEL ARCHIVO Script Usuario - Rol [PROSOFT].sql
--     --> VERIFICAR QUE LA NOMENCLATURA SEA CORRECTA Y EXACTA EN MYSQL
--     --> EN LA BD, EN TODAS LAS TABLAS Y EN TODOS LOS ATRIBUTOS
-- ----------------------------------------------------------------
-- 6.- GENERAR EL MODELO (E-R) A PARTIR DE LA BD GENERADA Y EL SCRIPT AGREGADO
--     --> NO GENERAR EL MODELO RELACIONAL DE MYSQL...
-- 7.- ENTREGAR EL SCRIPT ACTUALIZADO Y EL MODELO E-R EN UN SOLO DOCUMENTO:
--     --> WORD: PORTADA [CON LOS INTEGRANTES], CONTENIDO DEL SCRIPT
-- 8.- CARGAR EL DOCUMENTO INTEGRADOR EN MOODLE
--     --> LIMITE DE ENTREGA: LUNES 15 DE SEPTIEMBRE (11:59 PM)
-- ----------------------------------------------------------------
-- >>> TODOS LOS INTEGRANTES DE CADA EQUIPO DEBERÁN TENER CREADA LA BD, TABLAS
-- >>> E INSERCIONES DE REGISTROS
-- ----------------------------------------------------------------

-- DROP DATABASE BD_PROSOFT
-- CREACION DE UNA BASE DE DATOS

CREATE DATABASE bd_almacen;
-- ACTIVACIÓN DE LA BASE DE DATOS
USE bd_almacen;
-- CREACION DE TABLAS DE LA BASE DE DATOS
CREATE TABLE producto	
(
PRO_CVE              INT PRIMARY KEY AUTO_INCREMENT,
PRO_NOMBRE           VARCHAR(100),
PRO_DESCRIPCION      VARCHAR(255),
PRO_PRECIO           DECIMAL(10,2),
PRO_CANTIDAD         INT(3),
PRO_ACTIVO           TINYINT(1) DEFAULT 1,
PRO_FOTO             VARCHAR(255),
PRO_ESTATUS          VARCHAR(20) DEFAULT 'DISPONIBLE',
PRO_FECHA_REGISTRO   DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE rol (
	rol_cve_rol		INT		PRIMARY KEY NOT NULL AUTO_INCREMENT,
	rol_nombre		VARCHAR (30)	NOT NULL,
	rol_descripcion		VARCHAR (150)	NOT NULL
);

INSERT INTO rol VALUES (null,'ADMINISTRADOR', 'Administrador General de la Empresa');
INSERT INTO rol VALUES (null,'VENTAS', 'Gerente de Ventas');
INSERT INTO rol VALUES (null,'COMPRAS', 'Gerente de Compras');
INSERT INTO rol VALUES (null,'CLIENTE', 'Cliente general, sin distincion inicial');
SELECT * FROM rol;

-- --------------------------------------------------------------------------
CREATE TABLE usuario (
	usu_cve_usuario		INT		PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	usu_nombre		VARCHAR (30)	NOT NULL,
	usu_apellido_paterno	VARCHAR (30)	NOT NULL,
	usu_apellido_materno	VARCHAR (30)	NOT NULL,
	usu_telefono		VARCHAR (15),
	usu_correo		VARCHAR (50),
	usu_fecha_registro	DATETIME	NOT NULL,
	usu_usuario		VARCHAR (15)	NOT NULL,
	usu_password		VARCHAR (15)	NOT NULL,
	rol_cve_rol		INT		NOT NULL,
	FOREIGN KEY (rol_cve_rol) REFERENCES rol (rol_cve_rol)
);


select * from producto;

INSERT INTO usuario VALUES (null,'Pedro', 'Perez', 'Roig', '771-234-234', 'pperez@gmail.com', now(), 'pperez', 'itp2025',1);
INSERT INTO usuario VALUES (null,'Luis', 'Ruiz', 'Lopez', '771-876-321', 'lruiz@gmail.com', now(), 'lruiz', 'itp2025',2);
INSERT INTO usuario VALUES (null,'Ana', 'Bell', 'Ring', '771-123-987', 'bbell@gmail.com', now(), 'bbell', 'itp2025',4);
SELECT * FROM usuario;


INSERT INTO producto 
(PRO_NOMBRE, PRO_DESCRIPCION, PRO_PRECIO, PRO_CANTIDAD, PRO_ACTIVO, PRO_FOTO, PRO_ESTATUS)
VALUES
('Jabón de Barra Rosa', 'Jabón para baño', 15.00, 30, 1, 'imgproductos/1.jpg', 'DISPONIBLE'),
('Cloralex', 'Cloro desinfectante 1L', 25.00, 20, 1, 'imgproductos/2.jpg', 'DISPONIBLE'),
('Shampoo Head & Shoulders', 'Shampoo anticaspa 2 en 1', 95.00, 18, 1, 'imgproductos/3.jpg', 'DISPONIBLE'),
('Desodorante Dove', 'Antitranspirante Dove roll on', 75.00, 25, 1, 'imgproductos/4.jpg', 'DISPONIBLE'),
('Pasta Dental Colgate', 'Pasta dental 75ml', 30.00, 40, 1, 'imgproductos/5.jpg', 'DISPONIBLE'),
('Cepillo Dental', 'Cepillo dental cerdas suaves', 20.00, 60, 1, 'imgproductos/6.jpg', 'DISPONIBLE'),
('Catsup', 'Salsa de tomate 250ml', 22.00, 15, 1, 'imgproductos/7.jpg', 'DISPONIBLE'),
('Salsa Botanera Valentina', 'Salsa picante 250ml', 12.00, 25, 1, 'imgproductos/8.jpg', 'DISPONIBLE'),
('Mermelada de Fresa', 'Mermelada 200g', 28.00, 20, 1, 'imgproductos/9.jpg', 'DISPONIBLE'),
('Lechera Nestlé', 'Leche condensada 350g', 35.00, 30, 1, 'imgproductos/10.jpg', 'DISPONIBLE'),
('Carnation Clavel', 'Leche evaporada 360g', 20.00, 15, 1, 'imgproductos/11.jpg', 'DISPONIBLE'),
('Tang Naranja', 'Bebida en polvo sabor naranja', 6.00, 80, 1, 'imgproductos/12.jpg', 'DISPONIBLE'),
('Coca-Cola 600ml', 'Refresco de cola', 18.00, 50, 1, 'imgproductos/13.jpg', 'DISPONIBLE'),
('Red Cola 600ml', 'Refresco de cola', 15.00, 35, 1, 'imgproductos/14.jpg', 'DISPONIBLE'),
('Atún Herdez en Agua', 'Lata de 140g', 22.00, 40, 1, 'imgproductos/15.jpg', 'DISPONIBLE'),
('Consomate', 'Cubos de caldo de pollo', 10.00, 30, 1, 'imgproductos/16.png', 'DISPONIBLE'),
('Nutri Leche', 'Leche saborizada', 18.00, 25, 1, 'imgproductos/17.jpg', 'DISPONIBLE'),
('Mostaza McCormick', 'Mostaza 100g', 12.00, 20, 1, 'imgproductos/18.jpg', 'DISPONIBLE'),
('Sardinas San Marcos', 'Lata de sardinas', 25.00, 18, 1, 'imgproductos/19.jpg', 'DISPONIBLE'),
('Mayonesa McCormick', 'Mayonesa 190g', 25.00, 22, 1, 'imgproductos/20.jpg', 'DISPONIBLE');

-- ---------------------------------------------------------------------------------------
-- Procedimiento: Control de Acceso, validacion de usuarios y estatus de env o de resultado
-- Datos:		  Usuario, Contrasena
-- Estatus:		  '0' - Usuario Incorrecto
-- 			  '1' - Usuario Correcto + datos del usuario
-- Parametros entrada:	  usuario, contrasena


delimiter $$
create procedure sp_Acceso
(
in usuario  varchar(15),
in password varchar(15)
)
begin
	-- Validacion de condicion de acceso (usuario y password)
	if exists(  select  u.usu_nombre, u.usu_apellido_paterno, u.usu_apellido_materno, 
						u.usu_usuario, r.rol_nombre
				from    usuario u, rol r
				where   u.usu_usuario = usuario
				and     u.usu_password = password
				and     u.rol_cve_rol = r.rol_cve_rol  ) then


					select  '1' as usu_ban, usu_cve_usuario,
                    concat(u.usu_nombre, ' ',
                        u.usu_apellido_paterno, ' ',
                        u.usu_apellido_materno) as usu_nombre, 
							u.usu_usuario, r.rol_nombre
					from    usuario u, rol r
					where   u.usu_usuario = usuario
					and     u.usu_password = password
					and     u.rol_cve_rol = r.rol_cve_rol;
	
	else
					select '0' as usu_ban;
	end if;

end $$


-- Ejecuci n del procedimiento (pruebas de validaci n de acceso)
call sp_Acceso('hola','12345');
call sp_Acceso('pperez','todospasaran?');
call sp_Acceso('pperez','itp2025');
call sp_Acceso('ppere','todospasaran?');

DELIMITER //

CREATE OR REPLACE ALGORITHM = UNDEFINED 
DEFINER = root@localhost 
SQL SECURITY DEFINER VIEW VwRptProductos AS
    SELECT 
        p.PRO_CVE AS clave_producto,
        p.PRO_NOMBRE AS nombre,
        p.PRO_DESCRIPCION AS descripcion,
        p.PRO_PRECIO AS precio,
        p.PRO_CANTIDAD AS cantidad,
        p.PRO_FOTO AS foto,
        p.PRO_ESTATUS AS estatus
    FROM
        producto p
    WHERE
        (p.PRO_ACTIVO = 1)
        AND (p.PRO_CANTIDAD > 0)
        AND (p.PRO_ESTATUS = 'DISPONIBLE')
    ORDER BY 
        p.PRO_NOMBRE ASC;



