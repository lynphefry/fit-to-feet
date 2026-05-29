# FEET TO FIT - Gym Shop Website

A modern, responsive gym shop website built with HTML, CSS, Bootstrap, and Node.js backend.

## 🌐 Live Demo
https://fit-to-feet.vercel.app

## 📁 Project Structure

```
fit-to-feet/
├── index.html              # Home page
├── assets/
│   ├── shop.html          # Shop/products page
│   ├── contact.html       # Contact page
│   ├── style.css          # Custom styles
│   └── images/            # Product images
├── vercel.json            # Vercel configuration
└── README.md              # This file
```

## ✨ Features

- 📱 **Responsive Design** - Works on all devices
- 🛒 **Shopping Cart** - Add/remove items
- 🛍️ **Product Catalog** - Multiple gym products
- 📧 **Contact Form** - Customer inquiries
- 🔗 **Easy Navigation** - Navbar on all pages
- 🚀 **Fast Loading** - Optimized for speed

## 📖 Pages

### Home Page (index.html)
- Welcome banner
- Features overview
- Call-to-action button to shop

### Shop Page (assets/shop.html)
- Product listings with images
- Add to cart functionality
- Shopping cart with totals
- Checkout button

### Contact Page (assets/contact.html)
- Contact form
- Business information
- Hours of operation

## 🔧 Setup Instructions

### Local Development
1. Clone the repository
```bash
git clone https://github.com/lynphefry/fit-to-feet.git
cd fit-to-feet
```

2. Start a local server
```bash
# Using Python 3
python -m http.server 8000

# Using Node.js http-server
npx http-server
```

3. Open http://localhost:8000 in your browser

### Backend Integration (Optional)
For full backend functionality with database:
1. Check out the `add-backend` branch
2. Follow setup instructions in that branch's README

## 🚀 Deployment to Vercel

### Method 1: Via GitHub
1. Push to GitHub
2. Go to https://vercel.com
3. Import your GitHub repository
4. Vercel auto-detects and deploys

### Method 2: Using Vercel CLI
```bash
npm install -g vercel
vercel
```

## 🛠️ Technologies Used

- HTML5
- CSS3
- Bootstrap 5
- JavaScript (ES6+)
- Vercel (Hosting)

## 📱 Navigation Links

All pages have consistent navigation:
- **Home** → `index.html`
- **Shop** → `assets/shop.html`
- **Contact** → `assets/contact.html`

## 📝 Product Information

### Current Products
1. **Gym Outfit For Female** - Ksh 3,500
2. **Gym Outfit For Men** - Ksh 1,800
3. **Yoga Mat** - Ksh 2,000

## 🎨 Styling

Custom CSS can be added to `assets/style.css`

### Current CSS Framework
- Bootstrap 5.3.3 from CDN

## 🔐 Security Notes

- Store sensitive data in environment variables
- Never commit API keys
- Use HTTPS for all external requests

## 📞 Support

For issues or suggestions, open a GitHub issue or contact us at info@fittofeet.com

## 📄 License

This project is open source and available under the MIT License.

## 🙏 Credits

Created by lynphefry

---
**Last Updated:** 2026-05-29
