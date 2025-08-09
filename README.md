# Related Posts – WordPress Plugin

A custom WordPress plugin that adds a **related posts slider** to single post pages using **Owl Carousel**.  
The plugin automatically detects related posts based on category or tags and displays them in a responsive carousel.

---

## 🔧 Project Overview

- 👨‍💻 **Role:** Full plugin development (PHP + CSS + JS)
- 📅 **Status:** Completed
- 🌐 **Test Environment:** [Localhost Development – mh-develop.local](http://mh-develop.local)

---

## 🧰 Technologies Used

- **PHP** – WordPress hooks, custom queries, admin settings.
- **CSS** – Frontend and admin styling + Owl Carousel theme.
- **JavaScript (jQuery + Owl Carousel)** – Carousel initialization and responsive behavior.

---

## 🧠 Features

- Displays related posts based on shared **categories or tags**.
- Fully responsive slider using **Owl Carousel**.
- Admin settings page to configure:
  - Number of posts to show
  - Query type (category/tags)
- Works with any WordPress theme.
- Lightweight and optimized for performance.

---


---

## 📄 File Details

### **`core.php`**
Main plugin loader:
- Registers and enqueues CSS & JS.
- Includes necessary PHP files from `_inc` and `view`.
- Initializes the related posts feature.

### **`assets/css/style.css`**
Frontend styling for:
- Carousel layout
- Navigation arrows and dots
- Responsive behavior for different devices

### **`assets/css/admin/admin-style.css`**
Styling for the plugin’s admin settings page.

### **`assets/css/owl.carousel.min.css`** & **`owl.theme.default.min.css`**
Prebuilt Owl Carousel styles for consistent slider appearance.

### **`assets/js/main.js`**
Initializes Owl Carousel on the related posts container with responsive settings.

### **`assets/js/owl.carousel.min.js`**
Owl Carousel library (minified).

### **`_inc/get-related-posts.php`**
Queries related posts based on current post categories or tags.

### **`_inc/setting/setting.php`**
Defines admin settings fields and options.

### **`_inc/setting/menu.php`**
Registers the plugin’s admin menu and settings page.

### **`view/front/related-posts.php`**
HTML template for displaying the related posts slider on single post pages.


---

## 🗂️ Installation

1. Download the `related-post` folder.
2. Place it inside your WordPress `wp-content/plugins/` directory.
3. Go to **WordPress Dashboard > Plugins** and activate **Related Posts**.
4. Configure settings from the **Related Posts** menu in the admin panel.

---

## 📌 Notes

- Uses Owl Carousel for smooth sliding animations.
- Related posts are determined automatically, but can be customized via settings.
- Tested with WordPress 6.x and PHP 8.x.

---

## 📬 Contact

If you’d like to learn more or collaborate:

- 📧 Email: **mr.hooshangi.official@gmail.com**  
- 🌐 Website: [www.mohsenhooshangi.ir](https://www.mohsenhooshangi.ir)  
- 🖥️ GitHub: [github.com/MohsenHooshangi](https://github.com/MohsenHooshangi)


