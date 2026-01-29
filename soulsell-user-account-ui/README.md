# SoulSell User Account UI

This project is designed to provide a user-friendly interface for managing user accounts within the SoulSell application. It includes various views for users to access their orders, profile information, and account settings.

## Project Structure

The project is organized as follows:

```
soulsell-user-account-ui
├── resources
│   └── views
│       ├── layouts
│       │   └── app.blade.php        # Main layout for the application
│       ├── partials
│       │   ├── header.blade.php      # Header section with navigation
│       │   ├── footer.blade.php      # Footer section with copyright info
│       │   └── sidebar.blade.php     # Sidebar navigation links
│       └── user
│           ├── dashboard.blade.php   # User dashboard overview
│           ├── orders.blade.php      # List of user's past orders
│           ├── profile.blade.php     # User profile information
│           └── settings.blade.php    # Account settings management
├── public
│   ├── css
│   │   └── app.css                   # Main CSS styles for the application
│   └── js
│       └── app.js                    # Main JavaScript for the application
├── package.json                      # npm configuration file
├── vite.config.js                    # Vite build tool configuration
├── postcss.config.js                 # PostCSS configuration
├── tailwind.config.js                # Tailwind CSS configuration
└── README.md                         # Project documentation
```

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/ThinkCode-IT-Solutions/SoulSell.git
   ```

2. Navigate to the project directory:
   ```
   cd soulsell-user-account-ui
   ```

3. Install the dependencies:
   ```
   npm install
   ```

4. Run the development server:
   ```
   npm run dev
   ```

5. Open your browser and navigate to `http://localhost:3000` to view the application.

## Usage Guidelines

- Users can access their dashboard to view an overview of their account.
- The orders page allows users to see their past orders and statuses.
- The profile page enables users to view and edit their personal information.
- The settings page provides options for managing account settings.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License

This project is licensed under the MIT License. See the LICENSE file for details.