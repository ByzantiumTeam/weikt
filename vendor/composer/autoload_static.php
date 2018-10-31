<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34a41e2841af1a67f3ddef099fc7b348
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        'ddc3cd2a04224f9638c5d0de6a69c7e3' => __DIR__ . '/..' . '/topthink/think-migration/src/config.php',
        'cc56288302d9df745d97c934d6a6e5f0' => __DIR__ . '/..' . '/topthink/think-queue/src/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\mongo\\' => 12,
            'think\\migration\\' => 16,
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Phinx\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\mongo\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-mongo/src',
        ),
        'think\\migration\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/src',
        ),
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
            1 => __DIR__ . '/..' . '/topthink/think-image/src',
            2 => __DIR__ . '/..' . '/topthink/think-queue/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Phinx\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx',
        ),
    );

    public static $classMap = array (
        'Phinx\\Db\\Adapter\\AdapterFactory' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterFactory.php',
        'Phinx\\Db\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterInterface.php',
        'Phinx\\Db\\Adapter\\AdapterWrapper' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterWrapper.php',
        'Phinx\\Db\\Adapter\\MysqlAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/MysqlAdapter.php',
        'Phinx\\Db\\Adapter\\PdoAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/PdoAdapter.php',
        'Phinx\\Db\\Adapter\\PostgresAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/PostgresAdapter.php',
        'Phinx\\Db\\Adapter\\ProxyAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/ProxyAdapter.php',
        'Phinx\\Db\\Adapter\\SQLiteAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/SQLiteAdapter.php',
        'Phinx\\Db\\Adapter\\SqlServerAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/SqlServerAdapter.php',
        'Phinx\\Db\\Adapter\\TablePrefixAdapter' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/TablePrefixAdapter.php',
        'Phinx\\Db\\Adapter\\WrapperInterface' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/WrapperInterface.php',
        'Phinx\\Db\\Table' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Table.php',
        'Phinx\\Db\\Table\\Column' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Table/Column.php',
        'Phinx\\Db\\Table\\ForeignKey' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Table/ForeignKey.php',
        'Phinx\\Db\\Table\\Index' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Db/Table/Index.php',
        'Phinx\\Migration\\AbstractMigration' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Migration/AbstractMigration.php',
        'Phinx\\Migration\\AbstractTemplateCreation' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Migration/AbstractTemplateCreation.php',
        'Phinx\\Migration\\CreationInterface' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Migration/CreationInterface.php',
        'Phinx\\Migration\\IrreversibleMigrationException' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Migration/IrreversibleMigrationException.php',
        'Phinx\\Migration\\MigrationInterface' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Migration/MigrationInterface.php',
        'Phinx\\Seed\\AbstractSeed' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Seed/AbstractSeed.php',
        'Phinx\\Seed\\SeedInterface' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Seed/SeedInterface.php',
        'Phinx\\Util\\Util' => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx/Util/Util.php',
        'app\\api\\Base' => __DIR__ . '/../..' . '/application/api/Base.php',
        'app\\api\\v1\\controller\\Classify' => __DIR__ . '/../..' . '/application/api/v1/controller/Classify.php',
        'app\\api\\v1\\controller\\Common' => __DIR__ . '/../..' . '/application/api/v1/controller/Common.php',
        'app\\api\\v1\\controller\\Course' => __DIR__ . '/../..' . '/application/api/v1/controller/Course.php',
        'app\\api\\v1\\controller\\Index' => __DIR__ . '/../..' . '/application/api/v1/controller/Index.php',
        'app\\api\\v1\\controller\\Login' => __DIR__ . '/../..' . '/application/api/v1/controller/Login.php',
        'app\\api\\v1\\controller\\User' => __DIR__ . '/../..' . '/application/api/v1/controller/User.php',
        'app\\api\\v1\\model\\Curriculum' => __DIR__ . '/../..' . '/application/api/v1/model/Curriculum.php',
        'app\\api\\v1\\model\\CurriculumClassification' => __DIR__ . '/../..' . '/application/api/v1/model/CurriculumClassification.php',
        'app\\api\\v1\\model\\UserCollection' => __DIR__ . '/../..' . '/application/api/v1/model/UserCollection.php',
        'app\\api\\v1\\model\\UserStudy' => __DIR__ . '/../..' . '/application/api/v1/model/UserStudy.php',
        'app\\api\\v1\\model\\UserTask' => __DIR__ . '/../..' . '/application/api/v1/model/UserTask.php',
        'app\\console\\Base' => __DIR__ . '/../..' . '/application/console/Base.php',
        'app\\console\\controller\\Common' => __DIR__ . '/../..' . '/application/console/controller/Common.php',
        'app\\console\\controller\\CourseClassify' => __DIR__ . '/../..' . '/application/console/controller/CourseClassify.php',
        'app\\console\\controller\\Curriculum' => __DIR__ . '/../..' . '/application/console/controller/Curriculum.php',
        'app\\console\\controller\\CurriculumChapter' => __DIR__ . '/../..' . '/application/console/controller/CurriculumChapter.php',
        'app\\console\\controller\\CurriculumTest' => __DIR__ . '/../..' . '/application/console/controller/CurriculumTest.php',
        'app\\console\\controller\\Exercise' => __DIR__ . '/../..' . '/application/console/controller/Exercise.php',
        'app\\console\\controller\\Index' => __DIR__ . '/../..' . '/application/console/controller/Index.php',
        'app\\console\\controller\\Login' => __DIR__ . '/../..' . '/application/console/controller/Login.php',
        'app\\console\\controller\\Student' => __DIR__ . '/../..' . '/application/console/controller/Student.php',
        'app\\console\\controller\\Work' => __DIR__ . '/../..' . '/application/console/controller/Work.php',
        'app\\console\\model\\Curriculum' => __DIR__ . '/../..' . '/application/console/model/Curriculum.php',
        'app\\console\\model\\CurriculumChapter' => __DIR__ . '/../..' . '/application/console/model/CurriculumChapter.php',
        'app\\console\\model\\CurriculumClassification' => __DIR__ . '/../..' . '/application/console/model/CurriculumClassification.php',
        'app\\console\\model\\CurriculumExercise' => __DIR__ . '/../..' . '/application/console/model/CurriculumExercise.php',
        'app\\console\\model\\CurriculumTest' => __DIR__ . '/../..' . '/application/console/model/CurriculumTest.php',
        'app\\console\\model\\CurriculumTestOption' => __DIR__ . '/../..' . '/application/console/model/CurriculumTestOption.php',
        'app\\console\\model\\UserBasic' => __DIR__ . '/../..' . '/application/console/model/UserBasic.php',
        'app\\console\\model\\UserTask' => __DIR__ . '/../..' . '/application/console/model/UserTask.php',
        'app\\index\\controller\\Error' => __DIR__ . '/../..' . '/application/index/controller/Error.php',
        'app\\index\\controller\\Index' => __DIR__ . '/../..' . '/application/index/controller/Index.php',
        'think\\App' => __DIR__ . '/../..' . '/thinkphp/library/think/App.php',
        'think\\Build' => __DIR__ . '/../..' . '/thinkphp/library/think/Build.php',
        'think\\Cache' => __DIR__ . '/../..' . '/thinkphp/library/think/Cache.php',
        'think\\Collection' => __DIR__ . '/../..' . '/thinkphp/library/think/Collection.php',
        'think\\Config' => __DIR__ . '/../..' . '/thinkphp/library/think/Config.php',
        'think\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/Console.php',
        'think\\Controller' => __DIR__ . '/../..' . '/thinkphp/library/think/Controller.php',
        'think\\Cookie' => __DIR__ . '/../..' . '/thinkphp/library/think/Cookie.php',
        'think\\Db' => __DIR__ . '/../..' . '/thinkphp/library/think/Db.php',
        'think\\Debug' => __DIR__ . '/../..' . '/thinkphp/library/think/Debug.php',
        'think\\Env' => __DIR__ . '/../..' . '/thinkphp/library/think/Env.php',
        'think\\Error' => __DIR__ . '/../..' . '/thinkphp/library/think/Error.php',
        'think\\Exception' => __DIR__ . '/../..' . '/thinkphp/library/think/Exception.php',
        'think\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/File.php',
        'think\\Hook' => __DIR__ . '/../..' . '/thinkphp/library/think/Hook.php',
        'think\\Image' => __DIR__ . '/..' . '/topthink/think-image/src/Image.php',
        'think\\Lang' => __DIR__ . '/../..' . '/thinkphp/library/think/Lang.php',
        'think\\Loader' => __DIR__ . '/../..' . '/thinkphp/library/think/Loader.php',
        'think\\Log' => __DIR__ . '/../..' . '/thinkphp/library/think/Log.php',
        'think\\Model' => __DIR__ . '/../..' . '/thinkphp/library/think/Model.php',
        'think\\Paginator' => __DIR__ . '/../..' . '/thinkphp/library/think/Paginator.php',
        'think\\Process' => __DIR__ . '/../..' . '/thinkphp/library/think/Process.php',
        'think\\Queue' => __DIR__ . '/..' . '/topthink/think-queue/src/Queue.php',
        'think\\Request' => __DIR__ . '/../..' . '/thinkphp/library/think/Request.php',
        'think\\Response' => __DIR__ . '/../..' . '/thinkphp/library/think/Response.php',
        'think\\Route' => __DIR__ . '/../..' . '/thinkphp/library/think/Route.php',
        'think\\Session' => __DIR__ . '/../..' . '/thinkphp/library/think/Session.php',
        'think\\Template' => __DIR__ . '/../..' . '/thinkphp/library/think/Template.php',
        'think\\Url' => __DIR__ . '/../..' . '/thinkphp/library/think/Url.php',
        'think\\Validate' => __DIR__ . '/../..' . '/thinkphp/library/think/Validate.php',
        'think\\View' => __DIR__ . '/../..' . '/thinkphp/library/think/View.php',
        'think\\cache\\Driver' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/Driver.php',
        'think\\cache\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/File.php',
        'think\\cache\\driver\\Lite' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Lite.php',
        'think\\cache\\driver\\Memcache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Memcache.php',
        'think\\cache\\driver\\Memcached' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Memcached.php',
        'think\\cache\\driver\\Redis' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Redis.php',
        'think\\cache\\driver\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Sqlite.php',
        'think\\cache\\driver\\Wincache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Wincache.php',
        'think\\cache\\driver\\Xcache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Xcache.php',
        'think\\captcha\\Captcha' => __DIR__ . '/..' . '/topthink/think-captcha/src/Captcha.php',
        'think\\captcha\\CaptchaController' => __DIR__ . '/..' . '/topthink/think-captcha/src/CaptchaController.php',
        'think\\composer\\Plugin' => __DIR__ . '/..' . '/topthink/think-installer/src/Plugin.php',
        'think\\composer\\ThinkExtend' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkExtend.php',
        'think\\composer\\ThinkFramework' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkFramework.php',
        'think\\composer\\ThinkTesting' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkTesting.php',
        'think\\config\\driver\\Ini' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Ini.php',
        'think\\config\\driver\\Json' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Json.php',
        'think\\config\\driver\\Xml' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Xml.php',
        'think\\console\\Command' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Command.php',
        'think\\console\\Input' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Input.php',
        'think\\console\\Output' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Output.php',
        'think\\console\\command\\Build' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Build.php',
        'think\\console\\command\\Clear' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Clear.php',
        'think\\console\\command\\Help' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Help.php',
        'think\\console\\command\\Lists' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Lists.php',
        'think\\console\\command\\Make' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Make.php',
        'think\\console\\command\\make\\Controller' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/make/Controller.php',
        'think\\console\\command\\make\\Model' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/make/Model.php',
        'think\\console\\command\\optimize\\Autoload' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Autoload.php',
        'think\\console\\command\\optimize\\Config' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Config.php',
        'think\\console\\command\\optimize\\Route' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Route.php',
        'think\\console\\command\\optimize\\Schema' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Schema.php',
        'think\\console\\input\\Argument' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Argument.php',
        'think\\console\\input\\Definition' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Definition.php',
        'think\\console\\input\\Option' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Option.php',
        'think\\console\\output\\Ask' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Ask.php',
        'think\\console\\output\\Descriptor' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Descriptor.php',
        'think\\console\\output\\Formatter' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Formatter.php',
        'think\\console\\output\\Question' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Question.php',
        'think\\console\\output\\descriptor\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/descriptor/Console.php',
        'think\\console\\output\\driver\\Buffer' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Buffer.php',
        'think\\console\\output\\driver\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Console.php',
        'think\\console\\output\\driver\\Nothing' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Nothing.php',
        'think\\console\\output\\formatter\\Stack' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/formatter/Stack.php',
        'think\\console\\output\\formatter\\Style' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/formatter/Style.php',
        'think\\console\\output\\question\\Choice' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/question/Choice.php',
        'think\\console\\output\\question\\Confirmation' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/question/Confirmation.php',
        'think\\controller\\Rest' => __DIR__ . '/../..' . '/thinkphp/library/think/controller/Rest.php',
        'think\\controller\\Yar' => __DIR__ . '/../..' . '/thinkphp/library/think/controller/Yar.php',
        'think\\db\\Builder' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Builder.php',
        'think\\db\\Connection' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Connection.php',
        'think\\db\\Expression' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Expression.php',
        'think\\db\\Query' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Query.php',
        'think\\db\\builder\\Mysql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Mysql.php',
        'think\\db\\builder\\Pgsql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Pgsql.php',
        'think\\db\\builder\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Sqlite.php',
        'think\\db\\builder\\Sqlsrv' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Sqlsrv.php',
        'think\\db\\connector\\Mysql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Mysql.php',
        'think\\db\\connector\\Pgsql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Pgsql.php',
        'think\\db\\connector\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Sqlite.php',
        'think\\db\\connector\\Sqlsrv' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Sqlsrv.php',
        'think\\db\\exception\\BindParamException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/BindParamException.php',
        'think\\db\\exception\\DataNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/DataNotFoundException.php',
        'think\\db\\exception\\ModelNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/ModelNotFoundException.php',
        'think\\debug\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/debug/Console.php',
        'think\\debug\\Html' => __DIR__ . '/../..' . '/thinkphp/library/think/debug/Html.php',
        'think\\exception\\ClassNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ClassNotFoundException.php',
        'think\\exception\\DbException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/DbException.php',
        'think\\exception\\ErrorException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ErrorException.php',
        'think\\exception\\Handle' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/Handle.php',
        'think\\exception\\HttpException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/HttpException.php',
        'think\\exception\\HttpResponseException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/HttpResponseException.php',
        'think\\exception\\PDOException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/PDOException.php',
        'think\\exception\\RouteNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/RouteNotFoundException.php',
        'think\\exception\\TemplateNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/TemplateNotFoundException.php',
        'think\\exception\\ThrowableError' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ThrowableError.php',
        'think\\exception\\ValidateException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ValidateException.php',
        'think\\helper\\Arr' => __DIR__ . '/..' . '/topthink/think-helper/src/Arr.php',
        'think\\helper\\Hash' => __DIR__ . '/..' . '/topthink/think-helper/src/Hash.php',
        'think\\helper\\Str' => __DIR__ . '/..' . '/topthink/think-helper/src/Str.php',
        'think\\helper\\Time' => __DIR__ . '/..' . '/topthink/think-helper/src/Time.php',
        'think\\helper\\hash\\Bcrypt' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Bcrypt.php',
        'think\\helper\\hash\\Md5' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Md5.php',
        'think\\image\\Exception' => __DIR__ . '/..' . '/topthink/think-image/src/image/Exception.php',
        'think\\image\\gif\\Decoder' => __DIR__ . '/..' . '/topthink/think-image/src/image/gif/Decoder.php',
        'think\\image\\gif\\Encoder' => __DIR__ . '/..' . '/topthink/think-image/src/image/gif/Encoder.php',
        'think\\image\\gif\\Gif' => __DIR__ . '/..' . '/topthink/think-image/src/image/gif/Gif.php',
        'think\\log\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/File.php',
        'think\\log\\driver\\Socket' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/Socket.php',
        'think\\log\\driver\\Test' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/Test.php',
        'think\\migration\\Command' => __DIR__ . '/..' . '/topthink/think-migration/src/Command.php',
        'think\\migration\\Migrator' => __DIR__ . '/..' . '/topthink/think-migration/src/Migrator.php',
        'think\\migration\\Seeder' => __DIR__ . '/..' . '/topthink/think-migration/src/Seeder.php',
        'think\\migration\\command\\Migrate' => __DIR__ . '/..' . '/topthink/think-migration/src/command/Migrate.php',
        'think\\migration\\command\\Seed' => __DIR__ . '/..' . '/topthink/think-migration/src/command/Seed.php',
        'think\\migration\\command\\migrate\\Breakpoint' => __DIR__ . '/..' . '/topthink/think-migration/src/command/migrate/Breakpoint.php',
        'think\\migration\\command\\migrate\\Create' => __DIR__ . '/..' . '/topthink/think-migration/src/command/migrate/Create.php',
        'think\\migration\\command\\migrate\\Rollback' => __DIR__ . '/..' . '/topthink/think-migration/src/command/migrate/Rollback.php',
        'think\\migration\\command\\migrate\\Run' => __DIR__ . '/..' . '/topthink/think-migration/src/command/migrate/Run.php',
        'think\\migration\\command\\migrate\\Status' => __DIR__ . '/..' . '/topthink/think-migration/src/command/migrate/Status.php',
        'think\\migration\\command\\seed\\Create' => __DIR__ . '/..' . '/topthink/think-migration/src/command/seed/Create.php',
        'think\\migration\\command\\seed\\Run' => __DIR__ . '/..' . '/topthink/think-migration/src/command/seed/Run.php',
        'think\\migration\\db\\Column' => __DIR__ . '/..' . '/topthink/think-migration/src/db/Column.php',
        'think\\migration\\db\\Table' => __DIR__ . '/..' . '/topthink/think-migration/src/db/Table.php',
        'think\\model\\Collection' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Collection.php',
        'think\\model\\Merge' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Merge.php',
        'think\\model\\Pivot' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Pivot.php',
        'think\\model\\Relation' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Relation.php',
        'think\\model\\relation\\BelongsTo' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/BelongsTo.php',
        'think\\model\\relation\\BelongsToMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/BelongsToMany.php',
        'think\\model\\relation\\HasMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasMany.php',
        'think\\model\\relation\\HasManyThrough' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasManyThrough.php',
        'think\\model\\relation\\HasOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasOne.php',
        'think\\model\\relation\\MorphMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphMany.php',
        'think\\model\\relation\\MorphOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphOne.php',
        'think\\model\\relation\\MorphTo' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphTo.php',
        'think\\model\\relation\\OneToOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/OneToOne.php',
        'think\\mongo\\Builder' => __DIR__ . '/..' . '/topthink/think-mongo/src/Builder.php',
        'think\\mongo\\Connection' => __DIR__ . '/..' . '/topthink/think-mongo/src/Connection.php',
        'think\\mongo\\Query' => __DIR__ . '/..' . '/topthink/think-mongo/src/Query.php',
        'think\\paginator\\driver\\Bootstrap' => __DIR__ . '/../..' . '/thinkphp/library/think/paginator/driver/Bootstrap.php',
        'think\\process\\Builder' => __DIR__ . '/../..' . '/thinkphp/library/think/process/Builder.php',
        'think\\process\\Utils' => __DIR__ . '/../..' . '/thinkphp/library/think/process/Utils.php',
        'think\\process\\exception\\Failed' => __DIR__ . '/../..' . '/thinkphp/library/think/process/exception/Failed.php',
        'think\\process\\exception\\Timeout' => __DIR__ . '/../..' . '/thinkphp/library/think/process/exception/Timeout.php',
        'think\\process\\pipes\\Pipes' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Pipes.php',
        'think\\process\\pipes\\Unix' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Unix.php',
        'think\\process\\pipes\\Windows' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Windows.php',
        'think\\queue\\CallQueuedHandler' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/CallQueuedHandler.php',
        'think\\queue\\Connector' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Connector.php',
        'think\\queue\\Job' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Job.php',
        'think\\queue\\Listener' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Listener.php',
        'think\\queue\\Queueable' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Queueable.php',
        'think\\queue\\ShouldQueue' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/ShouldQueue.php',
        'think\\queue\\Worker' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Worker.php',
        'think\\queue\\command\\Listen' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Listen.php',
        'think\\queue\\command\\Restart' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Restart.php',
        'think\\queue\\command\\Subscribe' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Subscribe.php',
        'think\\queue\\command\\Work' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Work.php',
        'think\\queue\\connector\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Database.php',
        'think\\queue\\connector\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Redis.php',
        'think\\queue\\connector\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Sync.php',
        'think\\queue\\connector\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Topthink.php',
        'think\\queue\\job\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Database.php',
        'think\\queue\\job\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Redis.php',
        'think\\queue\\job\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Sync.php',
        'think\\queue\\job\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Topthink.php',
        'think\\response\\Json' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Json.php',
        'think\\response\\Jsonp' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Jsonp.php',
        'think\\response\\Redirect' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Redirect.php',
        'think\\response\\View' => __DIR__ . '/../..' . '/thinkphp/library/think/response/View.php',
        'think\\response\\Xml' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Xml.php',
        'think\\session\\driver\\Memcache' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Memcache.php',
        'think\\session\\driver\\Memcached' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Memcached.php',
        'think\\session\\driver\\Redis' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Redis.php',
        'think\\template\\TagLib' => __DIR__ . '/../..' . '/thinkphp/library/think/template/TagLib.php',
        'think\\template\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/template/driver/File.php',
        'think\\template\\taglib\\Cx' => __DIR__ . '/../..' . '/thinkphp/library/think/template/taglib/Cx.php',
        'think\\view\\driver\\Php' => __DIR__ . '/../..' . '/thinkphp/library/think/view/driver/Php.php',
        'think\\view\\driver\\Think' => __DIR__ . '/../..' . '/thinkphp/library/think/view/driver/Think.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34a41e2841af1a67f3ddef099fc7b348::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34a41e2841af1a67f3ddef099fc7b348::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34a41e2841af1a67f3ddef099fc7b348::$classMap;

        }, null, ClassLoader::class);
    }
}
