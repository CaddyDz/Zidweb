# Zidweb
Web Development Agency

![Check & fix styling](https://github.com/Zidweb/Zidweb/workflows/Check%20&%20fix%20styling/badge.svg)
![Laravel](https://github.com/Zidweb/Zidweb/workflows/Laravel/badge.svg)
![Pull Request Labeler](https://github.com/Zidweb/Zidweb/workflows/Pull%20Request%20Labeler/badge.svg)

# Installation instructions (vagrant / local dev)

1. Download & install [VirtualBox](https://virtualbox.org/wiki/downloads), [Vagrant](https://vagrantup.com/downloads)
https://docs.github.com/en/github/authenticating-to-github/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent#generating-a-new-ssh-key
2. Git clone this repository
```bash
git clone git@github.com:Zidweb/Zidweb.git
```
3. Let's boot this beast up and start dev'ing:
```bash
vagrant up
vagrant ssh
cd Zidweb
```
4. Install dependencies
```bash
composer install
```
5. Copy the environment variables file
```bash
cp .env.example .env
```
6. Generate encryption key
```bash
php artisan key:generate
```

* Now just access http://zidweb.local
