# HCeditor v.1.0.0
Редактор текста HTML(VueJS)
## Установка

Клонируйте репозиторию в корневую папку(/HCeditor)

    <head>
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
	    <script src="/HCeditor/HCeditorjs.js"></script>
    </head>


## Примеры
 -- **Пример-1. Если в одном контейнере будет один редактор**

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>HCeditor</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script src="/HCeditor/HCeditorjs.js"></script>
      </head>
      <body>
	      // id или class может быть контейнером см. Пример-5
        <div id="container">
          <hc-editor></hc-editor>
        </div>
      </body>
      <script>
      //Инициализация редактора
      init_hceditor({
	    // id, если контейнер id, class, если контейнер является class'ом
	    // Самый простой вариант изображение можно вставить только по URL
        id: 'container' 
        //class: 'container' см. Пример-5
      });
      </script>
    </html>
-- **Пример-2. С несколькими редакторами в одном контейнере**
		
      <body>
        <div id="container">
		  // i это index без него на одной странице не будет работать несколько редакторов
		  // для форм’а можете использовать name примеры использование в примере-3
          <hc-editor i='0'></hc-editor>
          <hc-editor i='1'></hc-editor>
        </div>
      </body>
      <script>
      init_hceditor({
        id: 'container'
        // или class: 'container' см. Пример-5
      });
      </script>
    </html>

--**Пример-3 использование name в form**

    <body>
	    <form method="post">
	      <div id="container">
		    // код вам вернет HCeditorContent_'ваш name'
	        <hc-editor name='content'  i='0'></hc-editor>
	        // HCeditorContent_content
	        <hc-editor name='content1' i='1'></hc-editor>
       	    // HCeditorContent_content1
	      </div>
	    </form>
    </body>
--**Пример-4 включение скачивание изображение на сервер**

    	<body>
        <form method="post" enctype="multipart/form-data">
          <div id="container" >
            <hc-editor name='content' i='0'></hc-editor>
            <hc-editor name='content1' i='1'></hc-editor>
          </div>
        </form>
      </body>
      <script>
      init_hceditor({
        id: 'container',
        // Включает функцию скачивание файлов на сервер
        load_img: true,
        // Нужно указать абсолютный путь, если не указать выдает ошибку.
        load_to: '/'
      });
      </script>
--**Пример-5. Как нельзя?**

	  <body>
          <div id="container" >
            <hc-editor i='0'></hc-editor>
          </div>
          <div id="container" >
            <hc-editor i='1'></hc-editor>
          </div>
      </body>
      <script>
      //Здесь сработает только первый контейнер
      init_hceditor({
        id: 'container',
      });
      </script>
--**Как тогда поступить?**
	  Вы можете использовать разные id и каждую инициализировать отдельно.
	  Это неудобно!
	  Но вы можете использовать  class'ы
	  
	  <body>
          <div class="container" >
            <hc-editor i='0'></hc-editor>
          </div>
          <div class="container" >
            <hc-editor i='1'></hc-editor>
          </div>
      </body>
      <script>
      init_hceditor({
        class: 'container',
      });
      </script>

**Skype - c.ronaldo82962** <br/>
**E-mail - faiq.alizade.00@mail.ru** <br/>
**Copyright - 2018. Faiq Alizade**
   

> HCeditor - v.1.0.0
