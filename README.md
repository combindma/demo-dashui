# DashUI Demo Project

## Introduction
This is the official demo project for [DashUI](https://github.com/combindma/dash-ui), a Laravel package that offers a suite of UI components inspired by [Shopify Polaris](https://polaris.shopify.com/components) and crafted with TailwindCSS, Laravel Blade, and Javascript. This demo is designed to showcase the capabilities and customization options of DashUI components.

## About Combind Agency

[Combine Agency](https://combind.ma?utm_source=github&utm_medium=banner&utm_campaign=package_name) is a leading web development agency specializing in building innovative and high-performance web applications using modern technologies. Our experienced team of developers, designers, and project managers is dedicated to providing top-notch services tailored to the unique needs of our clients.

If you need assistance with your next project or would like to discuss a custom solution, please feel free to [contact us](mailto:hello@combind.ma) or visit our [website](https://combind.ma?utm_source=github&utm_medium=banner&utm_campaign=package_name) for more information about our services. Let's build something amazing together!

## Prerequisites
Before you begin, ensure you have the following installed:
- PHP ^8.1
- Laravel 10.x or higher
- Composer
- Docker


## Installation

Follow these steps to set up the DashUI demo project:

1. **Clone the Repository**
```bash
git clone https://github.com/combindma/demo-dashui.git
cd demo-dashui
```

2. **Install PHP Dependencies**
```bash
composer install --ignore-platform-reqs
```

3. **Copy .env.example to .env**
```bash
cp .env.example .env
```

4. **Rebuild the application**
```bash
./vendor/bin/sail up -d
./vendor/bin/sail npm run build
```

## Running the Demo

The demo will run in your browser at [http://localhost](http://localhost)
