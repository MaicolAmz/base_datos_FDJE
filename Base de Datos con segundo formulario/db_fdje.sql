-- MySQL Script generated by MySQL Workbench
-- Tue Sep  7 11:46:34 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema db_fdje
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_fdje
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_fdje` ;

-- -----------------------------------------------------
-- Schema db_fdje
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_fdje` DEFAULT CHARACTER SET utf8mb4 ;
USE `db_fdje` ;

-- -----------------------------------------------------
-- Table `db_fdje`.`ayudas_fundacions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`ayudas_fundacions` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`ayudas_fundacions` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_ayuda` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`provincias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`provincias` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`provincias` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`ciudads`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`ciudads` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`ciudads` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  `id_provincia` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `ciudads_id_provincia_foreign`
    FOREIGN KEY (`id_provincia`)
    REFERENCES `db_fdje`.`provincias` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 222
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`diabetes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`diabetes` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`diabetes` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_diabetes` VARCHAR(200) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`failed_jobs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`failed_jobs` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`insulina_prandials`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`insulina_prandials` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`insulina_prandials` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`insulina_basals`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`insulina_basals` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`insulina_basals` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`medicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`medicos` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`medicos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(75) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 19
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`migrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`migrations` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`tipo_hospitals`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`tipo_hospitals` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`tipo_hospitals` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_hospitals` VARCHAR(200) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`educacions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`educacions` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`educacions` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `asiste_escuela` TINYINT NOT NULL COMMENT 'asiste a escuela',
  `escuela_especial` TINYINT NOT NULL COMMENT 'La escuela es especial',
  `modalidad_distancia` TINYINT NOT NULL,
  `ultimo_curso` VARCHAR(200) NOT NULL COMMENT 'Prekinder\nB??sica/Primaria (1ero a 10mo.) (curso: _______________)\nSecundaria/Colegio (1ero. a 3ro. bachillerato) (curso: _______________)\nUniversidad (carrera:________) (a??o / semestre: ________)',
  `nombre_institucion` VARCHAR(250) NULL COMMENT 'Nombre de la institucion a la que asiste',
  `direccion_institucion` VARCHAR(250) NULL COMMENT 'direccion de la Institucion',
  `telefono` VARCHAR(15) NULL DEFAULT NULL,
  `tipo_institucion` VARCHAR(50) NULL COMMENT 'P??blica - Privada - Fiscomisional',
  `no_estudiando` VARCHAR(100) NULL COMMENT 'Si no se encuentra estudiando, indique entre las opciones ??el por qu???\nSituaci??n econ??mica -  Situaci??n de salud -  No hay escuela o colegio cerca - No quiere estudiar - Necesita trabajar - Otro',
  `faltas_escuela` VARCHAR(100) NULL COMMENT '??Cu??ntos d??as faltaste por causa de la diabetes en el ??ltimo a??o?\n1 a 5 d??as ( ) 6 a 10 d??as ( ) 11 a 15 d??as ( ) un mes ( ) ninguno ( )',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`domicilios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`domicilios` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`domicilios` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(255) NOT NULL COMMENT 'Sector-Barrio-Recinto-Comuna /Manzana-Lote -Kil??metro',
  `calles` VARCHAR(100) NULL COMMENT 'Calles ??? intersecci??n',
  `referencia` VARCHAR(200) NULL DEFAULT 'Ning??na',
  `nombre_emergencia` VARCHAR(150) NULL COMMENT '??Alg??n familiar u otra persona que nos podamos comunicar en caso de no encontrar a nadie en casa?',
  `parentesco_emergencia` VARCHAR(50) NULL,
  `telefono_emergencia` VARCHAR(15) NULL,
  `bus_cooperativa` VARCHAR(50) NULL COMMENT 'Medios de transporte para llegar al domicilio desde la ciudad m??s cercana (se??alar la cooperativa de bus)',
  `id_ciudad` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `domicilios_id_ciudad_foreign`
    FOREIGN KEY (`id_ciudad`)
    REFERENCES `db_fdje`.`ciudads` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`info_diabetes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`info_diabetes` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`info_diabetes` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_diabetes` VARCHAR(200) NOT NULL,
  `como_diagnosticaron` VARCHAR(60) NOT NULL COMMENT '??C??mo le diagnosticaron? Cetoacidosis( ) Coma Diab??tico( ) Examen de rutina ( ) Sintomatolog??a ( )',
  `tiene_convulsiones` TINYINT(1) NOT NULL,
  `cuantas_convulsiones` INT NULL DEFAULT NULL,
  `maneja_glicemias` TINYINT NULL COMMENT '??Maneja Glicemias por si mismo? Si ( ) No ( )',
  `marca_glucometro` VARCHAR(75) NULL COMMENT '??Qu?? marca de gluc??metro usa?_',
  `otro_metodo_control` VARCHAR(75) NULL COMMENT '??Qu?? otros m??todos de control utiliza?\nPruebas de sangre ( ) Cetonas ( )\nHemoglobina glicosilada (HbA1C) ( ) Adivino a menudo ( )\nAdivino a veces ( ) Otro ( )',
  `veces_mide_glucosa` INT(11) NOT NULL COMMENT 'Cuantas veces mide la glucosa al d??a?',
  `mide_dia_glucosa` VARCHAR(250) NULL COMMENT 'En que parte del d??a mide su glucosa?\nAyunas - Media ma??ana - Almuerzo - Media tarde - Cena - Antes de dormir - Durante la noche/madrugada',
  `promedio_glucosa` VARCHAR(85) NULL COMMENT 'Su promedio de glucosa en los ??ltimos 15 d??as est?? entre el rango de:\n80< mg/dl ( ) 80-140mg/dl ( ) 150 mg/dl-200mg/dl ( ) 200 ??? 300 mg/dl ( ) >300 mg/dl ( )',
  `corrige_glucosa_alto` TINYINT NULL COMMENT '??Hace correcciones cuando est?? alto?',
  `ultimo_examen_hemogloblina` DATE NULL COMMENT '??En qu?? fecha se realiz?? el ??ltimo examen de hemoglobina glicosilada (HB1Ac)?',
  `veces_examen_a??o_hemoglobina` INT NULL COMMENT '??Con qu?? frecuencia se hace este examen? N?? veces al a??o',
  `ultimo_examen_fondo_ojo` DATE NULL COMMENT '??En qu?? fecha se realiz?? el ??ltimo examen de fondo de ojo?',
  `ultimo_examen_microalbuminuria` DATE NULL COMMENT '??En qu?? fecha se realiz?? el ??ltimo examen de microalbuminuria (ri????n)?',
  `resultado_microalbuminuria` VARCHAR(45) NULL COMMENT 'valor del examen',
  `edad` INT NOT NULL COMMENT 'edad del beneficiario cuando se diagnostic??',
  `costo` INT NULL COMMENT 'costo aproximado de tratar el diabetes',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`informacion_medicas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`informacion_medicas` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`informacion_medicas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tiene_medico` TINYINT NOT NULL,
  `nombres_medico` VARCHAR(200) NOT NULL COMMENT 'Nombre del M??dico especialista en diabetes',
  `especialidad_medico` VARCHAR(100) NULL,
  `hospital` VARCHAR(200) NOT NULL,
  `numero_visitas` INT NULL COMMENT '??N??mero de visitas al m??dico ??ltimo a??o?',
  `fecha_ultima_visita` DATE NULL,
  `asiste_taller_diabetes` VARCHAR(100) NULL DEFAULT NULL COMMENT '??Asistes a talleres de educaci??n en diabetes???D??nde?',
  `tiene_seguro_medico_diabetes` TINYINT NULL COMMENT '??Tienes seguro m??dico???cubre la diabetes?',
  `recibe_ayuda_diabetes` VARCHAR(200) NULL COMMENT '??Recibes alguna ayuda para tu diabetes?',
  `otra_enfermedad` VARCHAR(200) NULL,
  `distancia_subcentro` VARCHAR(45) NULL COMMENT '??A qu?? distancia esta del Sub- Centro de Salud/hospital m??s cercano ?',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


    -- -----------------------------------------------------
-- Table `db_fdje`.`viviendas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`viviendas` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`viviendas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vivienda_es` VARCHAR(50) NOT NULL COMMENT 'La vivienda es:\nPropia ( ) Arrendada ( ) Anticresis ( ) Cedida ( ) Recibida por servicios ( ) Invadida ( )\r',
  `tipo_vivienda` VARCHAR(70) NOT NULL COMMENT 'Tipo de vivienda\nCasa/villa( ) Departamento( ) Media agua( ) Rancho ( ) Cuarto inquilinato( ) Choza/covacha( ) Otro\n( ) ??cu??l?____________\r',
  `vive_con` TINYINT NOT NULL COMMENT '??La casa donde viven es compartida con otros familiares u arrendatarios? SI - NO',
  `material_techo` VARCHAR(70) NOT NULL COMMENT 'Material predominante del techo\nHormig??n ( ) Asbesto ( ) Zinc ( ) Teja ( ) Palma, paja, y hoja ( ) Otro ( ) cu??l? ',
  `material_paredes` VARCHAR(70) NOT NULL COMMENT 'Material Predominante de paredes exteriores\nHormig??n ( ) Ladrillo/bloque ( ) Adobe ( ) Madera ( ) Ca??a bahareque ( ) Otro ( ) cu??l?',
  `piso_vivienda` VARCHAR(70) NOT NULL COMMENT 'Piso de la vivienda \nDuela, parquet, tabl??n, piso flotante ( ) Tabla ( ) Cer??mica, baldosa, vinil, m??rmol ( ) Ladrillo, cemento ( ) Ca??a ( ) Tierra ( ) Otro ( )cu??l? ',
  `numero_cuartos` INT NOT NULL COMMENT '??Cu??ntos espacios tiene la casa (n??mero de cuartos) ',
  `cuartos_dormir` INT NOT NULL COMMENT '??Cu??ntos son exclusivos para dormir?',
  `espacio_cocinar` INT NOT NULL COMMENT '??Existe un espacio exclusivo para cocinar?',
  `hacinamiento` TINYINT NOT NULL COMMENT '??Existe hacinamiento?',
  `otros_espacios` VARCHAR(200) NOT NULL COMMENT '??Qu?? otros espacios existen en la casa?\nPatio ( ) jard??n ( ) terreno ( ) taller ( ) local( )',
  `abastecimineto_agua` VARCHAR(250) NOT NULL COMMENT '??El abastecimiento de agua a su hogar llega por?\nTuber??a dentro de la vivienda ( ) Grifo y pozo p??blico o privado ( )\nTuber??a fuera de la vivienda ( ) R??o, acequia, manantial, ojo de agua ( )\r\nNo recibe agua por tuber??a, sino por otros medios ( )',
  `consumo_agua` VARCHAR(150) NOT NULL COMMENT 'El agua que toman los miembros del hogar:\nLa beben como llega ( ) La hierven ( ) Ponen cloro ( ) La filtran ( ) Compran agua purificada ( ) ',
  `servicio_higienico` VARCHAR(45) NOT NULL COMMENT '??El servicio higi??nico es? compartido ( ) privado ( )\r',
  `tipo_alcantarillado` VARCHAR(50) NOT NULL COMMENT '??Est?? conectado a? Alcantarillado ( ) Pozo s??ptico ( )\n Pozo ciego, r??o, quebrada ( ) Letrina ( ) No tiene ( )',
  `mobiliario` VARCHAR(150) NOT NULL COMMENT 'Mobiliario:\nRefrigeradora ( ) televisi??n ( ) cocina ( ) microondas ( ) lavadora ( ) DVD ( )\nEquipo de sonido ( ) computadora ( ) impresora ( ) calef??n/termostato ( ) ducha el??ctrica ( )',
  `auto` TINYINT NOT NULL COMMENT '??Tiene auto? Si ( ) No ( )',
  `moto` TINYINT NOT NULL COMMENT '??Tiene moto? Si ( ) No ( )\r',
  `auto_trabajo` TINYINT NOT NULL COMMENT '??Utiliza su auto como fuente de trabajo? Si ( ) No ( )\r',
  `emprendimiento` VARCHAR(250) NOT NULL COMMENT 'En caso de tener un taller o microempresa especifique que herramientas de trabajo tiene.',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`beneficiarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`beneficiarios` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`beneficiarios` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  -- Formulario Completo
  `cedula` VARCHAR(15) NULL DEFAULT 'Sin c??dula',

  `nombres` VARCHAR(120) NOT NULL,
  `apellidos` VARCHAR(120) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `lugar_nacimiento` VARCHAR(50) NOT NULL,
  -- Formulario Completo
  `genero` VARCHAR(50) NULL DEFAULT NULL,
  `apodo` VARCHAR(45) NULL DEFAULT NULL,
  `etnia` VARCHAR(45) NOT NULL DEFAULT 'No indentificado' COMMENT 'Ind??gena - afroecuatoriano - montubio - mestizo - blanco - otro ',
  `tiene_discapacitado` TINYINT NOT NULL COMMENT 'Es discapacitado',
  `carnet_discapacitado` TINYINT NOT NULL COMMENT 'tiene carnet discapacitados',
  `tratamiento_opinion_hipoglucemia` VARCHAR(250) NULL COMMENT '??Cu??ndo tienes hipoglucemia, cu??l es el tratamiento? Si nunca ha tenido, ??Qu?? tratamiento piensa que es el adecuado?',

  `fecha_diagnostico_diabetes` DATE NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  `telefono_convencional` VARCHAR(15) NOT NULL,
  `valor_hemoglobina` INT(11) NOT NULL,
  `fecha_ultimo_examen_hemoglobina` DATE NULL DEFAULT NULL,
  `veces_mide_glucosa` INT(11) NOT NULL,
  `tiene_registro_glucosa` VARCHAR(50) NOT NULL,
  `puede_medir_glucosa` VARCHAR(50) NOT NULL,
  `dosis_insulina_basal` VARCHAR(120) NOT NULL,
  `dosis_insulina_prandial` VARCHAR(120) NOT NULL,
  `sintoma_frente_hipoglucemia` INT(11) NOT NULL,
  `veces_hipoglucemia_menos` INT(11) NOT NULL,
  `mas_baja_hipoglucemia` INT(11) NOT NULL,
  `administra_hipoglucemia` INT(11) NOT NULL,
  `tiene_convulsiones` TINYINT(1) NOT NULL,
  `nombres_medico` VARCHAR(200) NOT NULL,
  `fecha_ultima_cita` DATE NOT NULL,
  `nombre_hospital` VARCHAR(200) NOT NULL,
  `cedula_representante` VARCHAR(15) NOT NULL,
  `nombres_representante` VARCHAR(255) NOT NULL,
  `celular_representante` VARCHAR(15) NOT NULL,
  -- Formulario Completo
  `cedula_madre` VARCHAR(15) NULL DEFAULT 'Sin c??dula',
  `nombres_madre` VARCHAR(200) NOT NULL,
  `celular_madre` VARCHAR(15) NOT NULL,
  `cedula_padre` VARCHAR(15) NULL DEFAULT 'Sin c??dula',
  `nombres_padre` VARCHAR(200) NOT NULL,
  `celular_padre` VARCHAR(15) NOT NULL,

  `solicita_ayuda_fundacion` TINYINT(1) NOT NULL,
  `otra_enfermedad` VARCHAR(200) NOT NULL,
  `cantidad_familia` INT(11) NOT NULL,
  `cantidad_menores_edad` INT(11) NOT NULL,
  `algun_discapacitado_familia` VARCHAR(150) NOT NULL,
  `zona_vive` VARCHAR(40) NOT NULL,
  `tipo_vivienda` VARCHAR(45) NOT NULL,
  `personas_aportan_familia` INT(11) NOT NULL,
  `situacion_jefe_hogar` VARCHAR(40) NOT NULL,
  `id_ciudad` BIGINT(20) UNSIGNED NOT NULL,
  `id_diabetes` BIGINT(20) UNSIGNED NOT NULL,
  `id_insulina_basals` BIGINT(20) UNSIGNED NOT NULL,
  `id_insulina_prandials` BIGINT(20) UNSIGNED NOT NULL,
  `id_medico` BIGINT(20) UNSIGNED NOT NULL,
  `id_tipo_hospitals` BIGINT(20) UNSIGNED NOT NULL,
  `id_ayudas_fundacions` BIGINT(20) UNSIGNED NOT NULL,
  `id_educacion` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `id_domicilio` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `id_info_diabetes` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `id_info_medica` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `id_vivienda` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `beneficiarios_id_ayudas_fundacions_foreign`
    FOREIGN KEY (`id_ayudas_fundacions`)
    REFERENCES `db_fdje`.`ayudas_fundacions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_ciudad_foreign`
    FOREIGN KEY (`id_ciudad`)
    REFERENCES `db_fdje`.`ciudads` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_diabetes_foreign`
    FOREIGN KEY (`id_diabetes`)
    REFERENCES `db_fdje`.`diabetes` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_insulina_basals_foreign`
    FOREIGN KEY (`id_insulina_basals`)
    REFERENCES `db_fdje`.`insulina_basals` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_insulina_prandials_foreign`
    FOREIGN KEY (`id_insulina_prandials`)
    REFERENCES `db_fdje`.`insulina_prandials` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_medico_foreign`
    FOREIGN KEY (`id_medico`)
    REFERENCES `db_fdje`.`medicos` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_tipo_hospitals_foreign`
    FOREIGN KEY (`id_tipo_hospitals`)
    REFERENCES `db_fdje`.`tipo_hospitals` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_educacions_foreign`
    FOREIGN KEY (`id_educacion`)
    REFERENCES `db_fdje`.`educacions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_domicilio_foreign`
    FOREIGN KEY (`id_domicilio`)
    REFERENCES `db_fdje`.`domicilios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_info_diabetes_foreign`
    FOREIGN KEY (`id_info_diabetes`)
    REFERENCES `db_fdje`.`info_diabetes` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_info_medica_foreign`
    FOREIGN KEY (`id_info_medica`)
    REFERENCES `db_fdje`.`informacion_medicas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `beneficiarios_id_vivienda_foreign`
    FOREIGN KEY (`id_vivienda`)
    REFERENCES `db_fdje`.`viviendas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`recreacions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`recreacions` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`recreacions` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `actividad` VARCHAR(250) NOT NULL,
  `tiempo` VARCHAR(30) NOT NULL,
  `dia` VARCHAR(150) NOT NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `recreacions_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`tipo_insulinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`tipo_insulinas` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`tipo_insulinas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `tipo` VARCHAR(25) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`horario_insulinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`horario_insulinas` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`horario_insulinas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dosis` VARCHAR(45) NULL,
  `tiempo` VARCHAR(50) NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `id_insulina` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `horario_insulinas_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `horario_insulinas_id_insulina_foreign`
    FOREIGN KEY (`id_insulina`)
    REFERENCES `db_fdje`.`tipo_insulinas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


    -- -----------------------------------------------------
-- Table `db_fdje`.`paciente_insulinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`paciente_insulinas` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`paciente_insulinas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_insulina` BIGINT(20) UNSIGNED NOT NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `veces_inyecta` INT NULL COMMENT '??N??mero de veces que se inyecta?\nInsulina Lenta - Insulina R??pido',
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `paciente_insulinas_id_insulina_foreign`
    FOREIGN KEY (`id_insulina`)
    REFERENCES `db_fdje`.`tipo_insulinas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `paciente_insulinas_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`familiares`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`familiares` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`familiares` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(150) NOT NULL,
  `edad` INT NOT NULL,
  `sexo` VARCHAR(45) NOT NULL,
  `estado_Civil` VARCHAR(45) NOT NULL,
  `parentesco` VARCHAR(60) NOT NULL COMMENT 'Parentesco con el beneficiario',
  `escolaridad` VARCHAR(100) NULL COMMENT 'escolaridad del familiar',
  `ocupacion` VARCHAR(150) NULL,
  `observacion` VARCHAR(255) NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `familiares_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


    -- -----------------------------------------------------
-- Table `db_fdje`.`ingresos_familiares`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`ingresos_familiares` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`ingresos_familiares` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(150) NOT NULL,
  `parentesco` VARCHAR(60) NOT NULL,
  `ocupacion` VARCHAR(70) NOT NULL,
  `ingresos_mensuales` INT NOT NULL,
  `otros_ingresos` INT NOT NULL,
  `origen_ingresos` VARCHAR(120) NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `ingresos_familiares_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`egresos_familiares`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`egresos_familiares` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`egresos_familiares` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alimentacion` INT NOT NULL,
  `arriendo` INT NOT NULL,
  `agua` INT NOT NULL,
  `luz` INT NOT NULL,
  `gas_combustible` INT NOT NULL,
  `telefono_fijo` INT NOT NULL,
  `telefono_celular` INT NULL,
  `internet` INT NOT NULL,
  `transporte` INT NOT NULL,
  `educacion` INT NOT NULL,
  `colacion` INT NOT NULL,
  `vestimenta` INT NOT NULL,
  `calzado` INT NOT NULL,
  `utiles_acceso` INT NOT NULL,
  `recreacion` INT NOT NULL,
  `creditos` INT NOT NULL,
  `examen_c/3m` INT NOT NULL,
  `examen_c/6m` INT NOT NULL,
  `hemoglobina` INT NOT NULL,
  `fructosamina` INT NOT NULL,
  `glucosa` INT NOT NULL,
  `insulina` INT NOT NULL,
  `tiras_reactivas` INT NOT NULL,
  `consulta_medica` INT NOT NULL,
  `otros_insumos` INT NOT NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `egresos_familiares_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


    -- -----------------------------------------------------
-- Table `db_fdje`.`alimentacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`alimentacion` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`alimentacion` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `desayuno` VARCHAR(150) NOT NULL,
  `media_manana` VARCHAR(150) NOT NULL,
  `almuerzo` VARCHAR(150) NOT NULL,
  `media_tarde` VARCHAR(150) NOT NULL,
  `merienda` VARCHAR(150) NOT NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `alimentacion_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`relacion_familiars`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`relacion_familiars` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`relacion_familiars` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `organizacion_funcionamiento` VARCHAR(250) NOT NULL,
  `comunicacion` VARCHAR(200) NOT NULL COMMENT 'Comunicaci??n: (en funci??n del beneficiario)',
  `maltrato` VARCHAR(50) NOT NULL COMMENT 'Psicol??gico ( ) F??sico ( )',
  `quien_maltrato` VARCHAR(120) NULL,
  `maltrato_detalle` VARCHAR(200) NULL,
  `problema_psicologico` VARCHAR(200) NULL COMMENT 'Identifica alg??n indicio de problema psicol??gico:\nFalta de autoestima ( ) Conducta manipuladora ( ) Ansiedad /Depresi??n ( ) Des??rden alimentario ( )\nFalta de aceptaci??n a la diabetes ( ) Otro: cual? ',
  `alguien_enfermedad_grave` VARCHAR(200) NULL COMMENT 'Alguna enfermedad de gravedad que tenga alg??n familiar (Especifique qui??n, qu?? enfermedad y si recibe tratamiento)',
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `relacion_familiars_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`password_resets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`password_resets` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL
  )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`users` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
  )
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `db_fdje`.`formularios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_fdje`.`formularios` ;

CREATE TABLE IF NOT EXISTS `db_fdje`.`formularios` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero` INT NOT NULL,
  `a??o` VARCHAR(45) NOT NULL,
  `codigo` VARCHAR(45) NOT NULL,
  `fecha_visita` DATE NULL,
  `encargado_fundacion` VARCHAR(150) NULL,
  `diagnostico_social` VARCHAR(250) NULL,
  `id_beneficiario` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `formularios_id_beneficiario_foreign`
    FOREIGN KEY (`id_beneficiario`)
    REFERENCES `db_fdje`.`beneficiarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;