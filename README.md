# gRPC client with PHP : Todo App
Example project of using gRPC client in PHP.
Because this is client only, to follow the example we must have gRPC server. For that, we'll use [gRPC with Nodejs : Todo App](https://github.com/fajarbc/grpc-nodejs-example)

## Install
1. Copy `env` to `.env`
2. Be sure you have the PHP Extention.
   1. Because i use Windows, i download `php_grpc.dll` file at [gRPC 1.43.0 for Windows](https://pecl.php.net/package/gRPC/1.43.0/windows).
   2. Copy `php_grpc.dll` file to `php/ext` directory. In Xampp is located at `C:/xampp/php/ext`
   3. Enable the extention.
        - Open `php.ini` file. In Xampp is located at `C:/xampp/php`
        - In the bottom of the file add this line to your `php.ini` file, save it and run the Xampp.
            ```
            extension=php_grpc.dll
            ```

   For more details, read at [gRPC Github](https://github.com/grpc/grpc/blob/v1.45.0/src/php/README.md#install-on-windows) or [gRPC GCP](https://cloud.google.com/php/grpc#windows).
3. Install composer dependecies
    ```bash
    composer update
    ```

## Server
### Install
1. Clone [gRPC with Nodejs : Todo App](https://github.com/fajarbc/grpc-nodejs-example)
    ```bash
    git clone https://github.com/fajarbc/grpc-nodejs-example
    cd grpc-nodejs-example
    ```
2. Follow the install instruction there
### Run
1. In [gRPC with Nodejs : Todo App](https://github.com/fajarbc/grpc-nodejs-example) root project, run
    ```bash
    npm run server
    ```

## Client
### Make generated php files
1. Install `protoc`
   - [Download here](https://github.com/protocolbuffers/protobuf/releases) and add it to your path.
   - Make sure `protoc` is installed. Run in your terminal `protoc --version`
    - If it is installed, should output something like `libprotoc 3.20.1`
2. Install `grpc_php_plugin`
   1. Using cmake
   2. Using bazel
   3. I personally just download `.exe` file from [this repo](https://github.com/lifenglsf/grpc_for_windows)

   For more, follow [this step](https://github.com/grpc/grpc/blob/v1.45.0/src/php/README.md#grpc_php_plugin-protoc-plugin). In windows, make sure you have `Visual Studio Build Tools` 
3. Install `protobuf`. Already using PHP Implementation with composer dependecy (no action needed)
4. Build `php client`
   ```bash
    protoc -I=. todo.proto --php_out=php --plugin=protoc-gen-grpc=./grpc_php_plugin.exe
    ```

### Run the gRPC request
1. Make sure you're in `client/` dir.
    ```bash
    cd client/
    ```
2. Sent data. Change `"your text is here"` to whatever text data you want to send
    ```bash
    php request.php "your text is here"
    ```
3. Read data todos
    ```bash
    php read.php
    ```


## TODO
- `grpc_php_plugin.php` is not build by `cmake` or `bazel`. It version might not compatible or outdated.
- `TodoClient.php` is not generated. So if todo.proto has more method in its service, we should create it manually.
- Method `streamTodos` is not implemented yet in `TodoClient.php`. I tried but has no output when it run.