<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Phinx\\Db\\Adapter\\AdapterFactory' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterFactory.php',
    'Phinx\\Db\\Adapter\\AdapterInterface' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterInterface.php',
    'Phinx\\Db\\Adapter\\AdapterWrapper' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/AdapterWrapper.php',
    'Phinx\\Db\\Adapter\\MysqlAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/MysqlAdapter.php',
    'Phinx\\Db\\Adapter\\PdoAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/PdoAdapter.php',
    'Phinx\\Db\\Adapter\\PostgresAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/PostgresAdapter.php',
    'Phinx\\Db\\Adapter\\ProxyAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/ProxyAdapter.php',
    'Phinx\\Db\\Adapter\\SQLiteAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/SQLiteAdapter.php',
    'Phinx\\Db\\Adapter\\SqlServerAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/SqlServerAdapter.php',
    'Phinx\\Db\\Adapter\\TablePrefixAdapter' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/TablePrefixAdapter.php',
    'Phinx\\Db\\Adapter\\WrapperInterface' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Adapter/WrapperInterface.php',
    'Phinx\\Db\\Table' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Table.php',
    'Phinx\\Db\\Table\\Column' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Table/Column.php',
    'Phinx\\Db\\Table\\ForeignKey' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Table/ForeignKey.php',
    'Phinx\\Db\\Table\\Index' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Db/Table/Index.php',
    'Phinx\\Migration\\AbstractMigration' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Migration/AbstractMigration.php',
    'Phinx\\Migration\\AbstractTemplateCreation' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Migration/AbstractTemplateCreation.php',
    'Phinx\\Migration\\CreationInterface' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Migration/CreationInterface.php',
    'Phinx\\Migration\\IrreversibleMigrationException' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Migration/IrreversibleMigrationException.php',
    'Phinx\\Migration\\MigrationInterface' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Migration/MigrationInterface.php',
    'Phinx\\Seed\\AbstractSeed' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Seed/AbstractSeed.php',
    'Phinx\\Seed\\SeedInterface' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Seed/SeedInterface.php',
    'Phinx\\Util\\Util' => $vendorDir . '/topthink/think-migration/phinx/src/Phinx/Util/Util.php',
    'app\\api\\Base' => $baseDir . '/application/api/Base.php',
    'app\\api\\v1\\controller\\Classify' => $baseDir . '/application/api/v1/controller/Classify.php',
    'app\\api\\v1\\controller\\Common' => $baseDir . '/application/api/v1/controller/Common.php',
    'app\\api\\v1\\controller\\Course' => $baseDir . '/application/api/v1/controller/Course.php',
    'app\\api\\v1\\controller\\Index' => $baseDir . '/application/api/v1/controller/Index.php',
    'app\\api\\v1\\controller\\Login' => $baseDir . '/application/api/v1/controller/Login.php',
    'app\\api\\v1\\controller\\User' => $baseDir . '/application/api/v1/controller/User.php',
    'app\\api\\v1\\model\\Curriculum' => $baseDir . '/application/api/v1/model/Curriculum.php',
    'app\\api\\v1\\model\\CurriculumClassification' => $baseDir . '/application/api/v1/model/CurriculumClassification.php',
    'app\\api\\v1\\model\\UserCollection' => $baseDir . '/application/api/v1/model/UserCollection.php',
    'app\\api\\v1\\model\\UserStudy' => $baseDir . '/application/api/v1/model/UserStudy.php',
    'app\\api\\v1\\model\\UserTask' => $baseDir . '/application/api/v1/model/UserTask.php',
    'app\\console\\Base' => $baseDir . '/application/console/Base.php',
    'app\\console\\controller\\Common' => $baseDir . '/application/console/controller/Common.php',
    'app\\console\\controller\\CourseClassify' => $baseDir . '/application/console/controller/CourseClassify.php',
    'app\\console\\controller\\Curriculum' => $baseDir . '/application/console/controller/Curriculum.php',
    'app\\console\\controller\\CurriculumChapter' => $baseDir . '/application/console/controller/CurriculumChapter.php',
    'app\\console\\controller\\CurriculumTest' => $baseDir . '/application/console/controller/CurriculumTest.php',
    'app\\console\\controller\\Exercise' => $baseDir . '/application/console/controller/Exercise.php',
    'app\\console\\controller\\Index' => $baseDir . '/application/console/controller/Index.php',
    'app\\console\\controller\\Login' => $baseDir . '/application/console/controller/Login.php',
    'app\\console\\controller\\Student' => $baseDir . '/application/console/controller/Student.php',
    'app\\console\\controller\\Work' => $baseDir . '/application/console/controller/Work.php',
    'app\\console\\model\\Curriculum' => $baseDir . '/application/console/model/Curriculum.php',
    'app\\console\\model\\CurriculumChapter' => $baseDir . '/application/console/model/CurriculumChapter.php',
    'app\\console\\model\\CurriculumClassification' => $baseDir . '/application/console/model/CurriculumClassification.php',
    'app\\console\\model\\CurriculumExercise' => $baseDir . '/application/console/model/CurriculumExercise.php',
    'app\\console\\model\\CurriculumTest' => $baseDir . '/application/console/model/CurriculumTest.php',
    'app\\console\\model\\CurriculumTestOption' => $baseDir . '/application/console/model/CurriculumTestOption.php',
    'app\\console\\model\\UserBasic' => $baseDir . '/application/console/model/UserBasic.php',
    'app\\console\\model\\UserTask' => $baseDir . '/application/console/model/UserTask.php',
    'app\\index\\controller\\Error' => $baseDir . '/application/index/controller/Error.php',
    'app\\index\\controller\\Index' => $baseDir . '/application/index/controller/Index.php',
    'think\\App' => $baseDir . '/thinkphp/library/think/App.php',
    'think\\Build' => $baseDir . '/thinkphp/library/think/Build.php',
    'think\\Cache' => $baseDir . '/thinkphp/library/think/Cache.php',
    'think\\Collection' => $baseDir . '/thinkphp/library/think/Collection.php',
    'think\\Config' => $baseDir . '/thinkphp/library/think/Config.php',
    'think\\Console' => $baseDir . '/thinkphp/library/think/Console.php',
    'think\\Controller' => $baseDir . '/thinkphp/library/think/Controller.php',
    'think\\Cookie' => $baseDir . '/thinkphp/library/think/Cookie.php',
    'think\\Db' => $baseDir . '/thinkphp/library/think/Db.php',
    'think\\Debug' => $baseDir . '/thinkphp/library/think/Debug.php',
    'think\\Env' => $baseDir . '/thinkphp/library/think/Env.php',
    'think\\Error' => $baseDir . '/thinkphp/library/think/Error.php',
    'think\\Exception' => $baseDir . '/thinkphp/library/think/Exception.php',
    'think\\File' => $baseDir . '/thinkphp/library/think/File.php',
    'think\\Hook' => $baseDir . '/thinkphp/library/think/Hook.php',
    'think\\Image' => $vendorDir . '/topthink/think-image/src/Image.php',
    'think\\Lang' => $baseDir . '/thinkphp/library/think/Lang.php',
    'think\\Loader' => $baseDir . '/thinkphp/library/think/Loader.php',
    'think\\Log' => $baseDir . '/thinkphp/library/think/Log.php',
    'think\\Model' => $baseDir . '/thinkphp/library/think/Model.php',
    'think\\Paginator' => $baseDir . '/thinkphp/library/think/Paginator.php',
    'think\\Process' => $baseDir . '/thinkphp/library/think/Process.php',
    'think\\Queue' => $vendorDir . '/topthink/think-queue/src/Queue.php',
    'think\\Request' => $baseDir . '/thinkphp/library/think/Request.php',
    'think\\Response' => $baseDir . '/thinkphp/library/think/Response.php',
    'think\\Route' => $baseDir . '/thinkphp/library/think/Route.php',
    'think\\Session' => $baseDir . '/thinkphp/library/think/Session.php',
    'think\\Template' => $baseDir . '/thinkphp/library/think/Template.php',
    'think\\Url' => $baseDir . '/thinkphp/library/think/Url.php',
    'think\\Validate' => $baseDir . '/thinkphp/library/think/Validate.php',
    'think\\View' => $baseDir . '/thinkphp/library/think/View.php',
    'think\\cache\\Driver' => $baseDir . '/thinkphp/library/think/cache/Driver.php',
    'think\\cache\\driver\\File' => $baseDir . '/thinkphp/library/think/cache/driver/File.php',
    'think\\cache\\driver\\Lite' => $baseDir . '/thinkphp/library/think/cache/driver/Lite.php',
    'think\\cache\\driver\\Memcache' => $baseDir . '/thinkphp/library/think/cache/driver/Memcache.php',
    'think\\cache\\driver\\Memcached' => $baseDir . '/thinkphp/library/think/cache/driver/Memcached.php',
    'think\\cache\\driver\\Redis' => $baseDir . '/thinkphp/library/think/cache/driver/Redis.php',
    'think\\cache\\driver\\Sqlite' => $baseDir . '/thinkphp/library/think/cache/driver/Sqlite.php',
    'think\\cache\\driver\\Wincache' => $baseDir . '/thinkphp/library/think/cache/driver/Wincache.php',
    'think\\cache\\driver\\Xcache' => $baseDir . '/thinkphp/library/think/cache/driver/Xcache.php',
    'think\\captcha\\Captcha' => $vendorDir . '/topthink/think-captcha/src/Captcha.php',
    'think\\captcha\\CaptchaController' => $vendorDir . '/topthink/think-captcha/src/CaptchaController.php',
    'think\\composer\\Plugin' => $vendorDir . '/topthink/think-installer/src/Plugin.php',
    'think\\composer\\ThinkExtend' => $vendorDir . '/topthink/think-installer/src/ThinkExtend.php',
    'think\\composer\\ThinkFramework' => $vendorDir . '/topthink/think-installer/src/ThinkFramework.php',
    'think\\composer\\ThinkTesting' => $vendorDir . '/topthink/think-installer/src/ThinkTesting.php',
    'think\\config\\driver\\Ini' => $baseDir . '/thinkphp/library/think/config/driver/Ini.php',
    'think\\config\\driver\\Json' => $baseDir . '/thinkphp/library/think/config/driver/Json.php',
    'think\\config\\driver\\Xml' => $baseDir . '/thinkphp/library/think/config/driver/Xml.php',
    'think\\console\\Command' => $baseDir . '/thinkphp/library/think/console/Command.php',
    'think\\console\\Input' => $baseDir . '/thinkphp/library/think/console/Input.php',
    'think\\console\\Output' => $baseDir . '/thinkphp/library/think/console/Output.php',
    'think\\console\\command\\Build' => $baseDir . '/thinkphp/library/think/console/command/Build.php',
    'think\\console\\command\\Clear' => $baseDir . '/thinkphp/library/think/console/command/Clear.php',
    'think\\console\\command\\Help' => $baseDir . '/thinkphp/library/think/console/command/Help.php',
    'think\\console\\command\\Lists' => $baseDir . '/thinkphp/library/think/console/command/Lists.php',
    'think\\console\\command\\Make' => $baseDir . '/thinkphp/library/think/console/command/Make.php',
    'think\\console\\command\\make\\Controller' => $baseDir . '/thinkphp/library/think/console/command/make/Controller.php',
    'think\\console\\command\\make\\Model' => $baseDir . '/thinkphp/library/think/console/command/make/Model.php',
    'think\\console\\command\\optimize\\Autoload' => $baseDir . '/thinkphp/library/think/console/command/optimize/Autoload.php',
    'think\\console\\command\\optimize\\Config' => $baseDir . '/thinkphp/library/think/console/command/optimize/Config.php',
    'think\\console\\command\\optimize\\Route' => $baseDir . '/thinkphp/library/think/console/command/optimize/Route.php',
    'think\\console\\command\\optimize\\Schema' => $baseDir . '/thinkphp/library/think/console/command/optimize/Schema.php',
    'think\\console\\input\\Argument' => $baseDir . '/thinkphp/library/think/console/input/Argument.php',
    'think\\console\\input\\Definition' => $baseDir . '/thinkphp/library/think/console/input/Definition.php',
    'think\\console\\input\\Option' => $baseDir . '/thinkphp/library/think/console/input/Option.php',
    'think\\console\\output\\Ask' => $baseDir . '/thinkphp/library/think/console/output/Ask.php',
    'think\\console\\output\\Descriptor' => $baseDir . '/thinkphp/library/think/console/output/Descriptor.php',
    'think\\console\\output\\Formatter' => $baseDir . '/thinkphp/library/think/console/output/Formatter.php',
    'think\\console\\output\\Question' => $baseDir . '/thinkphp/library/think/console/output/Question.php',
    'think\\console\\output\\descriptor\\Console' => $baseDir . '/thinkphp/library/think/console/output/descriptor/Console.php',
    'think\\console\\output\\driver\\Buffer' => $baseDir . '/thinkphp/library/think/console/output/driver/Buffer.php',
    'think\\console\\output\\driver\\Console' => $baseDir . '/thinkphp/library/think/console/output/driver/Console.php',
    'think\\console\\output\\driver\\Nothing' => $baseDir . '/thinkphp/library/think/console/output/driver/Nothing.php',
    'think\\console\\output\\formatter\\Stack' => $baseDir . '/thinkphp/library/think/console/output/formatter/Stack.php',
    'think\\console\\output\\formatter\\Style' => $baseDir . '/thinkphp/library/think/console/output/formatter/Style.php',
    'think\\console\\output\\question\\Choice' => $baseDir . '/thinkphp/library/think/console/output/question/Choice.php',
    'think\\console\\output\\question\\Confirmation' => $baseDir . '/thinkphp/library/think/console/output/question/Confirmation.php',
    'think\\controller\\Rest' => $baseDir . '/thinkphp/library/think/controller/Rest.php',
    'think\\controller\\Yar' => $baseDir . '/thinkphp/library/think/controller/Yar.php',
    'think\\db\\Builder' => $baseDir . '/thinkphp/library/think/db/Builder.php',
    'think\\db\\Connection' => $baseDir . '/thinkphp/library/think/db/Connection.php',
    'think\\db\\Expression' => $baseDir . '/thinkphp/library/think/db/Expression.php',
    'think\\db\\Query' => $baseDir . '/thinkphp/library/think/db/Query.php',
    'think\\db\\builder\\Mysql' => $baseDir . '/thinkphp/library/think/db/builder/Mysql.php',
    'think\\db\\builder\\Pgsql' => $baseDir . '/thinkphp/library/think/db/builder/Pgsql.php',
    'think\\db\\builder\\Sqlite' => $baseDir . '/thinkphp/library/think/db/builder/Sqlite.php',
    'think\\db\\builder\\Sqlsrv' => $baseDir . '/thinkphp/library/think/db/builder/Sqlsrv.php',
    'think\\db\\connector\\Mysql' => $baseDir . '/thinkphp/library/think/db/connector/Mysql.php',
    'think\\db\\connector\\Pgsql' => $baseDir . '/thinkphp/library/think/db/connector/Pgsql.php',
    'think\\db\\connector\\Sqlite' => $baseDir . '/thinkphp/library/think/db/connector/Sqlite.php',
    'think\\db\\connector\\Sqlsrv' => $baseDir . '/thinkphp/library/think/db/connector/Sqlsrv.php',
    'think\\db\\exception\\BindParamException' => $baseDir . '/thinkphp/library/think/db/exception/BindParamException.php',
    'think\\db\\exception\\DataNotFoundException' => $baseDir . '/thinkphp/library/think/db/exception/DataNotFoundException.php',
    'think\\db\\exception\\ModelNotFoundException' => $baseDir . '/thinkphp/library/think/db/exception/ModelNotFoundException.php',
    'think\\debug\\Console' => $baseDir . '/thinkphp/library/think/debug/Console.php',
    'think\\debug\\Html' => $baseDir . '/thinkphp/library/think/debug/Html.php',
    'think\\exception\\ClassNotFoundException' => $baseDir . '/thinkphp/library/think/exception/ClassNotFoundException.php',
    'think\\exception\\DbException' => $baseDir . '/thinkphp/library/think/exception/DbException.php',
    'think\\exception\\ErrorException' => $baseDir . '/thinkphp/library/think/exception/ErrorException.php',
    'think\\exception\\Handle' => $baseDir . '/thinkphp/library/think/exception/Handle.php',
    'think\\exception\\HttpException' => $baseDir . '/thinkphp/library/think/exception/HttpException.php',
    'think\\exception\\HttpResponseException' => $baseDir . '/thinkphp/library/think/exception/HttpResponseException.php',
    'think\\exception\\PDOException' => $baseDir . '/thinkphp/library/think/exception/PDOException.php',
    'think\\exception\\RouteNotFoundException' => $baseDir . '/thinkphp/library/think/exception/RouteNotFoundException.php',
    'think\\exception\\TemplateNotFoundException' => $baseDir . '/thinkphp/library/think/exception/TemplateNotFoundException.php',
    'think\\exception\\ThrowableError' => $baseDir . '/thinkphp/library/think/exception/ThrowableError.php',
    'think\\exception\\ValidateException' => $baseDir . '/thinkphp/library/think/exception/ValidateException.php',
    'think\\helper\\Arr' => $vendorDir . '/topthink/think-helper/src/Arr.php',
    'think\\helper\\Hash' => $vendorDir . '/topthink/think-helper/src/Hash.php',
    'think\\helper\\Str' => $vendorDir . '/topthink/think-helper/src/Str.php',
    'think\\helper\\Time' => $vendorDir . '/topthink/think-helper/src/Time.php',
    'think\\helper\\hash\\Bcrypt' => $vendorDir . '/topthink/think-helper/src/hash/Bcrypt.php',
    'think\\helper\\hash\\Md5' => $vendorDir . '/topthink/think-helper/src/hash/Md5.php',
    'think\\image\\Exception' => $vendorDir . '/topthink/think-image/src/image/Exception.php',
    'think\\image\\gif\\Decoder' => $vendorDir . '/topthink/think-image/src/image/gif/Decoder.php',
    'think\\image\\gif\\Encoder' => $vendorDir . '/topthink/think-image/src/image/gif/Encoder.php',
    'think\\image\\gif\\Gif' => $vendorDir . '/topthink/think-image/src/image/gif/Gif.php',
    'think\\log\\driver\\File' => $baseDir . '/thinkphp/library/think/log/driver/File.php',
    'think\\log\\driver\\Socket' => $baseDir . '/thinkphp/library/think/log/driver/Socket.php',
    'think\\log\\driver\\Test' => $baseDir . '/thinkphp/library/think/log/driver/Test.php',
    'think\\migration\\Command' => $vendorDir . '/topthink/think-migration/src/Command.php',
    'think\\migration\\Migrator' => $vendorDir . '/topthink/think-migration/src/Migrator.php',
    'think\\migration\\Seeder' => $vendorDir . '/topthink/think-migration/src/Seeder.php',
    'think\\migration\\command\\Migrate' => $vendorDir . '/topthink/think-migration/src/command/Migrate.php',
    'think\\migration\\command\\Seed' => $vendorDir . '/topthink/think-migration/src/command/Seed.php',
    'think\\migration\\command\\migrate\\Breakpoint' => $vendorDir . '/topthink/think-migration/src/command/migrate/Breakpoint.php',
    'think\\migration\\command\\migrate\\Create' => $vendorDir . '/topthink/think-migration/src/command/migrate/Create.php',
    'think\\migration\\command\\migrate\\Rollback' => $vendorDir . '/topthink/think-migration/src/command/migrate/Rollback.php',
    'think\\migration\\command\\migrate\\Run' => $vendorDir . '/topthink/think-migration/src/command/migrate/Run.php',
    'think\\migration\\command\\migrate\\Status' => $vendorDir . '/topthink/think-migration/src/command/migrate/Status.php',
    'think\\migration\\command\\seed\\Create' => $vendorDir . '/topthink/think-migration/src/command/seed/Create.php',
    'think\\migration\\command\\seed\\Run' => $vendorDir . '/topthink/think-migration/src/command/seed/Run.php',
    'think\\migration\\db\\Column' => $vendorDir . '/topthink/think-migration/src/db/Column.php',
    'think\\migration\\db\\Table' => $vendorDir . '/topthink/think-migration/src/db/Table.php',
    'think\\model\\Collection' => $baseDir . '/thinkphp/library/think/model/Collection.php',
    'think\\model\\Merge' => $baseDir . '/thinkphp/library/think/model/Merge.php',
    'think\\model\\Pivot' => $baseDir . '/thinkphp/library/think/model/Pivot.php',
    'think\\model\\Relation' => $baseDir . '/thinkphp/library/think/model/Relation.php',
    'think\\model\\relation\\BelongsTo' => $baseDir . '/thinkphp/library/think/model/relation/BelongsTo.php',
    'think\\model\\relation\\BelongsToMany' => $baseDir . '/thinkphp/library/think/model/relation/BelongsToMany.php',
    'think\\model\\relation\\HasMany' => $baseDir . '/thinkphp/library/think/model/relation/HasMany.php',
    'think\\model\\relation\\HasManyThrough' => $baseDir . '/thinkphp/library/think/model/relation/HasManyThrough.php',
    'think\\model\\relation\\HasOne' => $baseDir . '/thinkphp/library/think/model/relation/HasOne.php',
    'think\\model\\relation\\MorphMany' => $baseDir . '/thinkphp/library/think/model/relation/MorphMany.php',
    'think\\model\\relation\\MorphOne' => $baseDir . '/thinkphp/library/think/model/relation/MorphOne.php',
    'think\\model\\relation\\MorphTo' => $baseDir . '/thinkphp/library/think/model/relation/MorphTo.php',
    'think\\model\\relation\\OneToOne' => $baseDir . '/thinkphp/library/think/model/relation/OneToOne.php',
    'think\\mongo\\Builder' => $vendorDir . '/topthink/think-mongo/src/Builder.php',
    'think\\mongo\\Connection' => $vendorDir . '/topthink/think-mongo/src/Connection.php',
    'think\\mongo\\Query' => $vendorDir . '/topthink/think-mongo/src/Query.php',
    'think\\paginator\\driver\\Bootstrap' => $baseDir . '/thinkphp/library/think/paginator/driver/Bootstrap.php',
    'think\\process\\Builder' => $baseDir . '/thinkphp/library/think/process/Builder.php',
    'think\\process\\Utils' => $baseDir . '/thinkphp/library/think/process/Utils.php',
    'think\\process\\exception\\Failed' => $baseDir . '/thinkphp/library/think/process/exception/Failed.php',
    'think\\process\\exception\\Timeout' => $baseDir . '/thinkphp/library/think/process/exception/Timeout.php',
    'think\\process\\pipes\\Pipes' => $baseDir . '/thinkphp/library/think/process/pipes/Pipes.php',
    'think\\process\\pipes\\Unix' => $baseDir . '/thinkphp/library/think/process/pipes/Unix.php',
    'think\\process\\pipes\\Windows' => $baseDir . '/thinkphp/library/think/process/pipes/Windows.php',
    'think\\queue\\CallQueuedHandler' => $vendorDir . '/topthink/think-queue/src/queue/CallQueuedHandler.php',
    'think\\queue\\Connector' => $vendorDir . '/topthink/think-queue/src/queue/Connector.php',
    'think\\queue\\Job' => $vendorDir . '/topthink/think-queue/src/queue/Job.php',
    'think\\queue\\Listener' => $vendorDir . '/topthink/think-queue/src/queue/Listener.php',
    'think\\queue\\Queueable' => $vendorDir . '/topthink/think-queue/src/queue/Queueable.php',
    'think\\queue\\ShouldQueue' => $vendorDir . '/topthink/think-queue/src/queue/ShouldQueue.php',
    'think\\queue\\Worker' => $vendorDir . '/topthink/think-queue/src/queue/Worker.php',
    'think\\queue\\command\\Listen' => $vendorDir . '/topthink/think-queue/src/queue/command/Listen.php',
    'think\\queue\\command\\Restart' => $vendorDir . '/topthink/think-queue/src/queue/command/Restart.php',
    'think\\queue\\command\\Subscribe' => $vendorDir . '/topthink/think-queue/src/queue/command/Subscribe.php',
    'think\\queue\\command\\Work' => $vendorDir . '/topthink/think-queue/src/queue/command/Work.php',
    'think\\queue\\connector\\Database' => $vendorDir . '/topthink/think-queue/src/queue/connector/Database.php',
    'think\\queue\\connector\\Redis' => $vendorDir . '/topthink/think-queue/src/queue/connector/Redis.php',
    'think\\queue\\connector\\Sync' => $vendorDir . '/topthink/think-queue/src/queue/connector/Sync.php',
    'think\\queue\\connector\\Topthink' => $vendorDir . '/topthink/think-queue/src/queue/connector/Topthink.php',
    'think\\queue\\job\\Database' => $vendorDir . '/topthink/think-queue/src/queue/job/Database.php',
    'think\\queue\\job\\Redis' => $vendorDir . '/topthink/think-queue/src/queue/job/Redis.php',
    'think\\queue\\job\\Sync' => $vendorDir . '/topthink/think-queue/src/queue/job/Sync.php',
    'think\\queue\\job\\Topthink' => $vendorDir . '/topthink/think-queue/src/queue/job/Topthink.php',
    'think\\response\\Json' => $baseDir . '/thinkphp/library/think/response/Json.php',
    'think\\response\\Jsonp' => $baseDir . '/thinkphp/library/think/response/Jsonp.php',
    'think\\response\\Redirect' => $baseDir . '/thinkphp/library/think/response/Redirect.php',
    'think\\response\\View' => $baseDir . '/thinkphp/library/think/response/View.php',
    'think\\response\\Xml' => $baseDir . '/thinkphp/library/think/response/Xml.php',
    'think\\session\\driver\\Memcache' => $baseDir . '/thinkphp/library/think/session/driver/Memcache.php',
    'think\\session\\driver\\Memcached' => $baseDir . '/thinkphp/library/think/session/driver/Memcached.php',
    'think\\session\\driver\\Redis' => $baseDir . '/thinkphp/library/think/session/driver/Redis.php',
    'think\\template\\TagLib' => $baseDir . '/thinkphp/library/think/template/TagLib.php',
    'think\\template\\driver\\File' => $baseDir . '/thinkphp/library/think/template/driver/File.php',
    'think\\template\\taglib\\Cx' => $baseDir . '/thinkphp/library/think/template/taglib/Cx.php',
    'think\\view\\driver\\Php' => $baseDir . '/thinkphp/library/think/view/driver/Php.php',
    'think\\view\\driver\\Think' => $baseDir . '/thinkphp/library/think/view/driver/Think.php',
);
