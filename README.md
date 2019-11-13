# codeigniter-telegram-login
Telegram login with CodeIgniter

## Requirements
1. [PHP](https://www.php.net/).
2. [Git](https://git-scm.com/).
3. [Ngrok](https://ngrok.com/). ( $ snap install ngrok )
4. [Telegram](https://telegram.org/) Account.
5. Linux OS (feel free to use any OS)


## Setup
#### Telegram:
1. Create a new chatbot via [BotFather](https://telegram.me/BotFather).
2. Store the newly created telegram bot access token in your OS environment variable by running:

```bash
export TELEGRAM_ACCESS_TOKEN=YOUR-ACCESS-TOKEN
```
3. Link your application domain to your new Telegram bot

## Usage
Clone the project from GitHub by running:

```bash
git clone https://github.com/cooleraid/codeigniter-telegram-login.git
```

Navigate to the project directory in your terminal and start your PHP local web server

```bash
php -S localhost:8000
```
Open a new terminal, Navigate to the project directory and start your Ngrok Server

```bash
ngrok http 8000
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://github.com/cooleraid/codeigniter-telegram-login/blob/master/LICENSE)
