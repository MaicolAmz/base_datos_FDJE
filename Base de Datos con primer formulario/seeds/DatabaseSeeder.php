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
        DB::table('ayudas_fundacions')->insert([
            'tipo_ayuda' => 'Educación en diabetes',
        ]);
        DB::table('ayudas_fundacions')->insert([
            'tipo_ayuda' => 'Apoyo de padres a padres',
        ]);
        DB::table('ayudas_fundacions')->insert([
            'tipo_ayuda' => 'Acceso a insumos de diabetes más económicos (tiras reactivas, glucómetros, insulinas)',
        ]);
        DB::table('ayudas_fundacions')->insert([
            'tipo_ayuda' => 'Talleres de Capacitación a instituciones educativas / empresas',
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
        DB::table('ciudades')->insert([
            'nombre' => 'CUENCA',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GIRÓN',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GUALACEO',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'NABÓN',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PAUTE',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUCARA',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN FERNANDO',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA ISABEL',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SIGSIG',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'OÑA',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHORDELEG',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL PAN',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SEVILLA DE ORO',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GUACHAPALA',
            'id_provincia' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CAMILO PONCE ENRÍQUEZ',
            'id_provincia' => 1
        ]);

        //BOLIVAR id = 2
        DB::table('ciudades')->insert([
            'nombre' => 'GUARANDA',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHILLANES',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHIMBO',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ECHEANDÍA',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN MIGUEL',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CALUMA',
            'id_provincia' => 2
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LAS NAVES',
            'id_provincia' => 2
        ]);

        //CAÑAR id = 3
        DB::table('ciudades')->insert([
            'nombre' => 'AZOGUES',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BIBLIÁN',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CAÑAR',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LA TRONCAL',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL TAMBO',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'DÉLEG',
            'id_provincia' => 3
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SUSCAL',
            'id_provincia' => 3
        ]);

        //CARCHI id = 4
        DB::table('ciudades')->insert([
            'nombre' => 'TULCÁN',
            'id_provincia' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BOLÍVAR',
            'id_provincia' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ESPEJO',
            'id_provincia' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MIRA',
            'id_provincia' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MONTÚFAR',
            'id_provincia' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN PEDRO DE HUACA',
            'id_provincia' => 4
        ]);

        //COTOPAXI id = 5
        DB::table('ciudades')->insert([
            'nombre' => 'LATACUNGA',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LA MANÁ',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PANGUA',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUJILI',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SALCEDO',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAQUISILÍ',
            'id_provincia' => 5
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SIGCHOS',
            'id_provincia' => 5
        ]);

        //CHIMBORAZO id = 6
        DB::table('ciudades')->insert([
            'nombre' => 'RIOBAMBA',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ALAUSI',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'COLTA',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHAMBO',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHUNCHI',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GUAMOTE',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GUANO',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALLATANGA',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PENIPE',
            'id_provincia' => 6
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CUMANDÁ',
            'id_provincia' => 6
        ]);

        //EL ORO id = 6
        DB::table('ciudades')->insert([
            'nombre' => 'MACHALA',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ARENILLAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ATAHUALPA',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BALSAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHILLA',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL GUABO',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'HUAQUILLAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MARCABELÍ',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PASAJE',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PIÑAS',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PORTOVELO',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA ROSA',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ZARUMA',
            'id_provincia' => 7
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LAS LAJAS',
            'id_provincia' => 7
        ]);

        //ESMERALDAS id=8
        DB::table('ciudades')->insert([
            'nombre' => 'ESMERALDAS',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ELOY ALFARO',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MUISNE',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUININDÉ',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN LORENZO',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ATACAMES',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'RIOVERDE',
            'id_provincia' => 8
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LA CONCORDIA',
            'id_provincia' => 8
        ]);

        //GUAYAS id=9
        DB::table('ciudades')->insert([
            'nombre' => 'GUAYAQUIL',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BALAO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BALZAR',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'COLIMES',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'DAULE',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'DURÁN',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL EMPALME',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL TRIUNFO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MILAGRO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'NARANJAL',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'NARANJITO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALESTINA',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PEDRO CARBO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAMBORONDÓN',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA LUCÍA',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SALITRE (URBINA JADO)',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN JACINTO DE YAGUACHI',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PLAYAS',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SIMÓN BOLÍVAR',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CORONEL MARCELINO MARIDUEÑA',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LOMAS DE SARGENTILLO',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'NOBOL',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GENERAL ANTONIO ELIZALDE',
            'id_provincia' => 9
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ISIDRO AYORA',
            'id_provincia' => 9
        ]);

        //IMBABURA id = 10
        DB::table('ciudades')->insert([
            'nombre' => 'IBARRA',
            'id_provincia' => 10
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ANTONIO ANTE',
            'id_provincia' => 10
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'COTACACHI',
            'id_provincia' => 10
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'OTAVALO',
            'id_provincia' => 10
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PIMAMPIRO',
            'id_provincia' => 10
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN MIGUEL DE URCUQUÍ',
            'id_provincia' => 10
        ]);

        //LOJA id=11
        DB::table('ciudades')->insert([
            'nombre' => 'LOJA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CALVAS',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CATAMAYO',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CELICA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHAGUARPAMBA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ESPÍNDOLA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GONZANAMÁ',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MACARÁ',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALTAS',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUYANGO',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SARAGURO',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SOZORANGA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ZAPOTILLO',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PINDAL',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUILANGA',
            'id_provincia' => 11
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'OLMEDO',
            'id_provincia' => 11
        ]);

        //LOS RÍOS id=12
        DB::table('ciudades')->insert([
            'nombre' => 'BABAHOYO',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BABA',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MONTALVO',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUEBLOVIEJO',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUEVEDO',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'URDANETA',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'VENTANAS',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'VÍNCES',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALENQUE',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BUENA FÉ',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'VALENCIA',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MOCACHE',
            'id_provincia' => 12
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUINSALOMA',
            'id_provincia' => 12
        ]);

        //MANABI id=13
        DB::table('ciudades')->insert([
            'nombre' => 'PORTOVIEJO',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BOLÍVAR',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHONE',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL CARMEN',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'FLAVIO ALFARO',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'JIPIJAPA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'JUNÍN',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MANTA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MONTECRISTI',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PAJÁN',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PICHINCHA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ROCAFUERTE',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA ANA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SUCRE',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'TOSAGUA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => '24 DE MAYO',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PEDERNALES',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'OLMEDO',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUERTO LÓPEZ',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'JAMA',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'JARAMIJÓ',
            'id_provincia' => 13
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN VICENTE',
            'id_provincia' => 13
        ]);

        //MORONA SANTIAGO id=14
        DB::table('ciudades')->insert([
            'nombre' => 'MORONA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GUALAQUIZA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LIMÓN INDANZA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALORA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTIAGO',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SUCÚA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'HUAMBOYA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN JUAN BOSCO',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'TAISHA',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LOGROÑO',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PABLO SEXTO',
            'id_provincia' => 14
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'TIWINTZA',
            'id_provincia' => 14
        ]);

        //NAPO id=15
        DB::table('ciudades')->insert([
            'nombre' => 'TENA',
            'id_provincia' => 15
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ARCHIDONA',
            'id_provincia' => 15
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL CHACO',
            'id_provincia' => 15
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUIJOS',
            'id_provincia' => 15
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CARLOS JULIO AROSEMENA TOLA',
            'id_provincia' => 15
        ]);

        //PASTAZA id=16
        DB::table('ciudades')->insert([
            'nombre' => 'PASTAZA',
            'id_provincia' => 16
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MERA',
            'id_provincia' => 16
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA CLARA',
            'id_provincia' => 16
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ARAJUNO',
            'id_provincia' => 16
        ]);

        //PICHINCHA
        DB::table('ciudades')->insert([
            'nombre' => 'QUITO',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CAYAMBE',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MEJIA',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PEDRO MONCAYO',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'RUMIÑAHUI',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN MIGUEL DE LOS BANCOS',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PEDRO VICENTE MALDONADO',
            'id_provincia' => 17
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUERTO QUITO',
            'id_provincia' => 17
        ]);

        //TUNGURAHUA id=18
        DB::table('ciudades')->insert([
            'nombre' => 'AMBATO',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'BAÑOS DE AGUA SANTA',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CEVALLOS',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'MOCHA',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PATATE',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'QUERO',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SAN PEDRO DE PELILEO',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTIAGO DE PÍLLARO',
            'id_provincia' => 18
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'TISALEO',
            'id_provincia' => 18
        ]);

        //ZAMORA CHINCHIPE id=19
        DB::table('ciudades')->insert([
            'nombre' => 'ZAMORA',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CHINCHIPE',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'NANGARITZA',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'YACUAMBI',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'YANTZAZA (YANZATZA)',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'EL PANGUI',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CENTINELA DEL CÓNDOR',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PALANDA',
            'id_provincia' => 19
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PAQUISHA',
            'id_provincia' => 19
        ]);

        //GALAPAGOS id=20
        DB::table('ciudades')->insert([
            'nombre' => 'SAN CRISTÓBAL',
            'id_provincia' => 20
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'ISABELA',
            'id_provincia' => 20
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA CRUZ',
            'id_provincia' => 20
        ]);

        //SUCUMBIOS id=21
        DB::table('ciudades')->insert([
            'nombre' => 'LAGO AGRIO',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'GONZALO PIZARRO',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'PUTUMAYO',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SHUSHUFINDI',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SUCUMBÍOS',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CASCALES',
            'id_provincia' => 21
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'CUYABENO',
            'id_provincia' => 21
        ]);

        //ORELLANA id=22
        DB::table('ciudades')->insert([
            'nombre' => 'ORELLANA',
            'id_provincia' => 22
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'AGUARICO',
            'id_provincia' => 22
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LA JOYA DE LOS SACHAS',
            'id_provincia' => 22
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LORETO',
            'id_provincia' => 22
        ]);

        //SANTO DOMINGO DE LOS TSACHILAS id=23
        DB::table('ciudades')->insert([
            'nombre' => 'SANTO DOMINGO',
            'id_provincia' => 23
        ]);

        //SANTO DOMINGO DE LOS TSACHILAS id=24
        DB::table('ciudades')->insert([
            'nombre' => 'SANTA ELENA',
            'id_provincia' => 24
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'LA LIBERTAD',
            'id_provincia' => 24
        ]);
        DB::table('ciudades')->insert([
            'nombre' => 'SALINAS',
            'id_provincia' => 24
        ]);

        //INSULINA BASAL
        DB::table('insulinas_basal')->insert([
            'nombre' => 'LANTUS'
        ]);
        DB::table('insulinas_basal')->insert([
            'nombre' => 'LEVEMIR'
        ]);
        DB::table('insulinas_basal')->insert([
            'nombre' => 'NOVOLIN N/HUMILIN N'
        ]);
        DB::table('insulinas_basal')->insert([
            'nombre' => 'TOUJEO'
        ]);
        DB::table('insulinas_basal')->insert([
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
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'PÚBLICO'
        ]);
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'PRIVADO'
        ]);
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'IESS'
        ]);
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'ISSFA'
        ]);
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'ISSPOL'
        ]);
        DB::table('tipo_hospitales')->insert([
            'tipo_hospitales' => 'OTROS'
        ]);

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
        ]);
    }
}
