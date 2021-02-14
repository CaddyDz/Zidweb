# Zidweb
Web Development Agency

![Check & fix styling](https://github.com/Zidweb/Zidweb/workflows/Check%20&%20fix%20styling/badge.svg)
![Laravel](https://github.com/Zidweb/Zidweb/workflows/Laravel/badge.svg)
![Pull Request Labeler](https://github.com/Zidweb/Zidweb/workflows/Pull%20Request%20Labeler/badge.svg)

# Installation instructions (vagrant / local dev)

1. Download & install [VirtualBox](https://virtualbox.org/wiki/downloads), [Vagrant](https://vagrantup.com/downloads) and [Composer](https://getcomposer.org)
2. Generate a public & private key (without passphrase):
```bash
ssh-keygen -t ed25519 -C "vagrant" -f ~/.ssh/vagrant
```
3. Git clone this repository
```bash
git clone https://github.com/Zidweb/Zidweb
```
4. Enter into Zidweb because we need to get Nova (it's a hack, @TODO: create-subrepo)
```bash
cd Zidweb
git clone https://github.com/Zidweb/nova
```
5. Install dependencies
```bash
composer install
```
6. Let's boot this beast up and start dev'ing:
```bash
vagrant up
```

* Now just access http://zidweb.local
