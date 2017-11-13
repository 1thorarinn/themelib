# themelib
Wordpress theme library for TMSoftware. Is to be included in themes.



**Class/folder structure**
Base namespace for example Tms, then this can be added on f.e. Tms\Posts and compose.json doesn't need to be modded but autoload needs to be dumped with:
`composer dump-autoload`


**Using this library in a theme**
Make sure composer autoload is included:
`require __DIR__ . '/vendor/autoload.php';`

Then load classes with use statement in global scope:

`use Tms\Example;
$exampleClass = new Example();`


![Alt text](/folder_struct.png?raw=true "Optional Title")


or if class is in a folder callerd Posts

`use Tms\Posts\PostWorker;
$postw = new PostWorker();`