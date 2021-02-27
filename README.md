# Zidweb
Web Development Agency

![Check & fix styling](https://github.com/Zidweb/Zidweb/workflows/Check%20&%20fix%20styling/badge.svg)
![Laravel](https://github.com/Zidweb/Zidweb/workflows/Laravel/badge.svg)
![Pull Request Labeler](https://github.com/Zidweb/Zidweb/workflows/Pull%20Request%20Labeler/badge.svg)

# Installation instructions (vagrant / local dev)

1. Download & install [VirtualBox](https://virtualbox.org/wiki/downloads), [Vagrant](https://vagrantup.com/downloads)

2. Create an SSH Key, follow [this guide]

3. Git clone this repository
```bash
git clone --recurse-submodules git@github.com:Zidweb/Zidweb.git
```

4. Boot the VM:
```bash
vagrant up
```

5. Log into the VM:
```bash
vagrant ssh
cd Zidweb
```

6. Install dependencies
```bash
composer install
```

7. Copy the environment variables file
```bash
cp .env.example .env
```

8. Generate encryption key
```bash
php artisan key:generate
```

9. Start developing: http://zidweb.local
