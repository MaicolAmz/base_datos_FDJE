<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //AYUDAS FUNDACIONES
        DB::table('ayuda_fundacions')->insert([
            'tipo_ayuda' => 'Educación en diabetes',
        ]);
        DB::table('ayuda_fundacions')->insert([
            'tipo_ayuda' => 'Apoyo de padres a padres',
        ]);
        DB::table('ayuda_fundacions')->insert([
            'tipo_ayuda' => 'Acceso a insumos de diabetes más económicos (tiras reactivas, glucómetros, insulinas)',
        ]);
        DB::table('ayuda_fundacions')->insert([
            'tipo_ayuda' => 'Talleres de Capacitación a instituciones educativas / empresas',
        ]);

        //NOMBRES MÉDICOS
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Alexandra Vimos'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Josefa Palacios'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Johanna Acosta'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Karina Iturralde'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Katty Jativa'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Kesia Granela'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Marcela Sevilla'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Mayela Guillén'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dra. Natasha Giler'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Byron Mendoza'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Carlos Ruilova'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. José Guerrero'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Mauricio Pérez'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Miguel Pasquel'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Patricio Prócel'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Pedro Aguilera'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'Dr. Willian Acosta'
        ]);
        DB::table('medicos')->insert([
            'nombres' => 'OTRO'
        ]);

        //TIPOS DIABETES
        DB::table('diabetes')->insert([
            'tipo_diabetes' => 'Diabetes Tipo 1',
        ]);
        DB::table('diabetes')->insert([
            'tipo_diabetes' => 'Diabetes Tipo 2',
        ]);
        DB::table('diabetes')->insert([
            'tipo_diabetes' => 'Diabetes Mody',
        ]);
        DB::table('diabetes')->insert([
            'tipo_diabetes' => 'Diabetes Gestacional',
        ]);

        //PROVINCIAS
        DB::table('provincias')->insert([
            'nombre' => 'AZUAY',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'BOLIVAR',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'CAÑAR',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'CARCHI',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'COTOPAXI ',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'CHIMBORAZO',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'EL ORO',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'ESMERALDAS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'GUAYAS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'IMBABURA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'LOJA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'LOS RIOS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'MANABI',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'MORONA SANTIAGO',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'NAPO',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'PASTAZA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'PICHINCHA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'TUNGURAHUA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'ZAMORA CHINCHIPE',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'GALAPAGOS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'SUCUMBIOS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'ORELLANA',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'SANTO DOMINGO DE LOS TSACHILAS',
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'SANTA ELENA',
        ]);

        //AZUAY id = 1
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CUENCA',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GIRÓN',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUALACEO',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'NABÓN',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PAUTE',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUCARA',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN FERNANDO',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA ISABEL',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SIGSIG',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'OÑA',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHORDELEG',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL PAN',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SEVILLA DE ORO',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUACHAPALA',
            'id_provincia' => 1
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CAMILO PONCE ENRÍQUEZ',
            'id_provincia' => 1
        ]);

        //BOLIVAR id = 2
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUARANDA',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHILLANES',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHIMBO',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ECHEANDÍA',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN MIGUEL',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CALUMA',
            'id_provincia' => 2
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LAS NAVES',
            'id_provincia' => 2
        ]);

        //CAÑAR id = 3
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'AZOGUES',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BIBLIÁN',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CAÑAR',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LA TRONCAL',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL TAMBO',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'DÉLEG',
            'id_provincia' => 3
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SUSCAL',
            'id_provincia' => 3
        ]);

        //CARCHI id = 4
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TULCÁN',
            'id_provincia' => 4
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BOLÍVAR',
            'id_provincia' => 4
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ESPEJO',
            'id_provincia' => 4
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MIRA',
            'id_provincia' => 4
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MONTÚFAR',
            'id_provincia' => 4
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN PEDRO DE HUACA',
            'id_provincia' => 4
        ]);

        //COTOPAXI id = 5
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LATACUNGA',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LA MANÁ',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PANGUA',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUJILI',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SALCEDO',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAQUISILÍ',
            'id_provincia' => 5
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SIGCHOS',
            'id_provincia' => 5
        ]);

        //CHIMBORAZO id = 6
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'RIOBAMBA',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ALAUSI',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'COLTA',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHAMBO',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHUNCHI',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUAMOTE',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUANO',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALLATANGA',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PENIPE',
            'id_provincia' => 6
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CUMANDÁ',
            'id_provincia' => 6
        ]);

        //EL ORO id = 6
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MACHALA',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ARENILLAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ATAHUALPA',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BALSAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHILLA',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL GUABO',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'HUAQUILLAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MARCABELÍ',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PASAJE',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PIÑAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PORTOVELO',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA ROSA',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ZARUMA',
            'id_provincia' => 7
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LAS LAJAS',
            'id_provincia' => 7
        ]);

        //ESMERALDAS id=8
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ESMERALDAS',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ELOY ALFARO',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MUISNE',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUININDÉ',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN LORENZO',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ATACAMES',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'RIOVERDE',
            'id_provincia' => 8
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LA CONCORDIA',
            'id_provincia' => 8
        ]);

        //GUAYAS id=9
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUAYAQUIL',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BALAO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BALZAR',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'COLIMES',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'DAULE',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'DURÁN',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL EMPALME',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL TRIUNFO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MILAGRO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'NARANJAL',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'NARANJITO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALESTINA',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PEDRO CARBO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAMBORONDÓN',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA LUCÍA',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SALITRE (URBINA JADO)',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN JACINTO DE YAGUACHI',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PLAYAS',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SIMÓN BOLÍVAR',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CORONEL MARCELINO MARIDUEÑA',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LOMAS DE SARGENTILLO',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'NOBOL',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GENERAL ANTONIO ELIZALDE',
            'id_provincia' => 9
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ISIDRO AYORA',
            'id_provincia' => 9
        ]);

        //IMBABURA id = 10
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'IBARRA',
            'id_provincia' => 10
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ANTONIO ANTE',
            'id_provincia' => 10
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'COTACACHI',
            'id_provincia' => 10
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'OTAVALO',
            'id_provincia' => 10
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PIMAMPIRO',
            'id_provincia' => 10
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN MIGUEL DE URCUQUÍ',
            'id_provincia' => 10
        ]);

        //LOJA id=11
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LOJA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CALVAS',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CATAMAYO',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CELICA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHAGUARPAMBA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ESPÍNDOLA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GONZANAMÁ',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MACARÁ',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALTAS',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUYANGO',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SARAGURO',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SOZORANGA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ZAPOTILLO',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PINDAL',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUILANGA',
            'id_provincia' => 11
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'OLMEDO',
            'id_provincia' => 11
        ]);

        //LOS RÍOS id=12
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BABAHOYO',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BABA',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MONTALVO',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUEBLOVIEJO',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUEVEDO',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'URDANETA',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'VENTANAS',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'VÍNCES',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALENQUE',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BUENA FÉ',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'VALENCIA',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MOCACHE',
            'id_provincia' => 12
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUINSALOMA',
            'id_provincia' => 12
        ]);

        //MANABI id=13
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PORTOVIEJO',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BOLÍVAR',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHONE',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL CARMEN',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'FLAVIO ALFARO',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'JIPIJAPA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'JUNÍN',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MANTA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MONTECRISTI',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PAJÁN',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PICHINCHA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ROCAFUERTE',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA ANA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SUCRE',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TOSAGUA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => '24 DE MAYO',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PEDERNALES',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'OLMEDO',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUERTO LÓPEZ',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'JAMA',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'JARAMIJÓ',
            'id_provincia' => 13
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN VICENTE',
            'id_provincia' => 13
        ]);

        //MORONA SANTIAGO id=14
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MORONA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GUALAQUIZA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LIMÓN INDANZA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALORA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTIAGO',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SUCÚA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'HUAMBOYA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN JUAN BOSCO',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TAISHA',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LOGROÑO',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PABLO SEXTO',
            'id_provincia' => 14
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TIWINTZA',
            'id_provincia' => 14
        ]);

        //NAPO id=15
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TENA',
            'id_provincia' => 15
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ARCHIDONA',
            'id_provincia' => 15
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL CHACO',
            'id_provincia' => 15
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUIJOS',
            'id_provincia' => 15
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CARLOS JULIO AROSEMENA TOLA',
            'id_provincia' => 15
        ]);

        //PASTAZA id=16
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PASTAZA',
            'id_provincia' => 16
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MERA',
            'id_provincia' => 16
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA CLARA',
            'id_provincia' => 16
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ARAJUNO',
            'id_provincia' => 16
        ]);

        //PICHINCHA
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUITO',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CAYAMBE',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MEJIA',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PEDRO MONCAYO',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'RUMIÑAHUI',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN MIGUEL DE LOS BANCOS',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PEDRO VICENTE MALDONADO',
            'id_provincia' => 17
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUERTO QUITO',
            'id_provincia' => 17
        ]);

        //TUNGURAHUA id=18
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'AMBATO',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'BAÑOS DE AGUA SANTA',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CEVALLOS',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'MOCHA',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PATATE',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'QUERO',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN PEDRO DE PELILEO',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTIAGO DE PÍLLARO',
            'id_provincia' => 18
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'TISALEO',
            'id_provincia' => 18
        ]);

        //ZAMORA CHINCHIPE id=19
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ZAMORA',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CHINCHIPE',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'NANGARITZA',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'YACUAMBI',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'YANTZAZA (YANZATZA)',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'EL PANGUI',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CENTINELA DEL CÓNDOR',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PALANDA',
            'id_provincia' => 19
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PAQUISHA',
            'id_provincia' => 19
        ]);

        //GALAPAGOS id=20
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SAN CRISTÓBAL',
            'id_provincia' => 20
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ISABELA',
            'id_provincia' => 20
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA CRUZ',
            'id_provincia' => 20
        ]);

        //SUCUMBIOS id=21
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LAGO AGRIO',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'GONZALO PIZARRO',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'PUTUMAYO',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SHUSHUFINDI',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SUCUMBÍOS',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CASCALES',
            'id_provincia' => 21
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'CUYABENO',
            'id_provincia' => 21
        ]);

        //ORELLANA id=22
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'ORELLANA',
            'id_provincia' => 22
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'AGUARICO',
            'id_provincia' => 22
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LA JOYA DE LOS SACHAS',
            'id_provincia' => 22
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LORETO',
            'id_provincia' => 22
        ]);

        //SANTO DOMINGO DE LOS TSACHILAS id=23
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTO DOMINGO',
            'id_provincia' => 23
        ]);

        //SANTO DOMINGO DE LOS TSACHILAS id=24
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SANTA ELENA',
            'id_provincia' => 24
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'LA LIBERTAD',
            'id_provincia' => 24
        ]);
        DB::table('ciudads')->insert([
            'nombre_ciudad' => 'SALINAS',
            'id_provincia' => 24
        ]);

        //INSULINA BASAL
        DB::table('insulina_basals')->insert([
            'nombre' => 'LANTUS'
        ]);
        DB::table('insulina_basals')->insert([
            'nombre' => 'LEVEMIR'
        ]);
        DB::table('insulina_basals')->insert([
            'nombre' => 'NOVOLIN N/HUMILIN N'
        ]);
        DB::table('insulina_basals')->insert([
            'nombre' => 'TOUJEO'
        ]);
        DB::table('insulina_basals')->insert([
            'nombre' => 'TRESIBA'
        ]);

        //INSULINA PRANDIAL/BOLUS
        DB::table('insulina_prandials')->insert([
            'nombre' => 'APIDRA'
        ]);
        DB::table('insulina_prandials')->insert([
            'nombre' => 'HUMALOG'
        ]);
        DB::table('insulina_prandials')->insert([
            'nombre' => 'NOVORAPID'
        ]);
        DB::table('insulina_prandials')->insert([
            'nombre' => 'NOVOLIN R/HUMILIN R'
        ]);

        //TIPO HOSPITALES
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'PÚBLICO'
        ]);
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'PRIVADO'
        ]);
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'IESS'
        ]);
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'ISSFA'
        ]);
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'ISSPOL'
        ]);
        DB::table('tipo_hospitals')->insert([
            'tipo_hospital' => 'OTROS'
        ]);
/*
        //PROBLEMA DIABETES
        DB::table('problema_diabetes')->insert([
            'problema' => 'Conocimiento'
        ]);
        DB::table('problema_diabetes')->insert([
            'problema' => 'Conducta/actitud'
        ]);
        DB::table('problema_diabetes')->insert([
            'problema' => 'Actividad física'
        ]);
        DB::table('problema_diabetes')->insert([
            'problema' => 'Recursos económicos'
        ]);
        DB::table('problema_diabetes')->insert([
            'problema' => 'Problemas familiares'
        ]);
        DB::table('problema_diabetes')->insert([
            'problema' => 'Poco tiempo para el cuidado de los niños'
        ]); */


        //PACIENTES
        /* DB::table('pacientes')->insert([
            'cedula' => '1234567890',
            'nombres' => 'Juanito',
            'apellidos' => 'Perez',
            'fecha_nacimiento' => '13/09/2000',
            'email' => 'test@test.com',
            'lugar_nacimiento' => 'Quito',
            'fecha_diagnostico_diabetes' => '2008-13-09',
            'celular' => '0987654321',
            'telefono_convencional' => '0987654',
            'valor_hemoglobina' => '2',
            'veces_mide_glucosa' => '3',
            'tiene_registro_glucosa' => '1',
            'puede_medir_glucosa' => '1',
            'dosis_insulina_basal' => '12',
            'dosis_insulina_prandial' => '12',
            'sintoma_frente_hipoglucemia' => 'Ninguno',
            'veces_hipoglucemia_menos' => '23',
            'mas_baja_hipoglucemia' => '12',
            'administra_hipoglucemia' => '1',
            'tiene_convulsiones' => '1',
            'nombres_medico' => 'Mario Jose',
            'fecha_ultima_cita' => '13/09/2010',
            'nombre_hospital' => 'Centro Medico',
            'cedula_representante' => '1234567890',
            'nombres_representante' => 'Mario K',
            'celular_representante' => '098786543',
            'solicita_ayuda_fundacion' => '1',
            'otra_enfermedad' => '1',
            'cantidad_familia' => '2',
            'cantidad_menores_edad' => '2',
            'algun_discapacitado_familia' => 'Ninguno',
            'zona_vive' => 'RURAL',
            'tipo_vivienda' => 'ARRENDADA',
            'personas_aportan_familia' => '2',
            'situacion_jefe_hogar' => 'Empleado',
            'problemas_diabetes' => 'Ninguno',
            'id_ciudad' => 1,
            'id_diabetes' => 1,
            'id_insulina_basals' => 1,
            'id_insulina_prandials' => 1,
            'id_tipo_hospital' => 1,
            'id_ayuda_fundacion' => 1
        ]); */
    }
}
