<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartRent - Smart Property Management Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-home text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">SmartRent</h1>
                        <p class="text-xs text-gray-500">Property Management</p>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Features</a>
                    <a href="#pricing" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Pricing</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Contact</a>
                </nav>

                <!-- Sign In Button -->
                <div class="flex items-center space-x-4">
                    <a href="login.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center space-x-2">
                        <i class="fas fa-sign-in-alt text-sm"></i>
                        <span>Sign In</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Smart Property
                    <span class="text-blue-600">Management</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Streamline your rental property operations with our comprehensive management platform. 
                    Track properties, manage tenants, handle maintenance, and analyze performance all in one place.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="login.html" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors flex items-center space-x-2">
                        <span>Get Started</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <button class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                        Watch Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Everything You Need to Manage Properties
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Our comprehensive platform provides all the tools you need to efficiently manage your rental properties.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property Management -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-building text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Property Management</h3>
                    <p class="text-gray-600 mb-4">
                        Organize and track all your properties in one centralized dashboard. Monitor occupancy rates, rental income, and property performance.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Property portfolio overview</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Occupancy tracking</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Financial reporting</li>
                    </ul>
                </div>

                <!-- Tenant Management -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-users text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Tenant Management</h3>
                    <p class="text-gray-600 mb-4">
                        Manage tenant information, lease agreements, and communication. Keep track of rent payments and tenant history.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Tenant profiles</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Lease management</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Payment tracking</li>
                    </ul>
                </div>

                <!-- Maintenance Tracking -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-wrench text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Maintenance Tracking</h3>
                    <p class="text-gray-600 mb-4">
                        Streamline maintenance requests and track repair progress. Assign tasks to technicians and monitor completion status.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Request management</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Technician assignment</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Progress tracking</li>
                    </ul>
                </div>

                <!-- Smart Devices -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Smart Device Integration</h3>
                    <p class="text-gray-600 mb-4">
                        Connect and monitor smart devices across your properties. Control access, temperature, and security systems remotely.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Device monitoring</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Remote control</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Automation rules</li>
                    </ul>
                </div>

                <!-- Analytics -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chart-bar text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Analytics & Reporting</h3>
                    <p class="text-gray-600 mb-4">
                        Get insights into your property performance with detailed analytics and customizable reports.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Performance metrics</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Custom reports</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Data visualization</li>
                    </ul>
                </div>

                <!-- Financial Management -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-dollar-sign text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Financial Management</h3>
                    <p class="text-gray-600 mb-4">
                        Track income, expenses, and profitability across your property portfolio with comprehensive financial tools.
                    </p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Income tracking</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Expense management</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i>Profit analysis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Trusted by Property Managers Worldwide
                </h2>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Join thousands of property managers who have streamlined their operations with SmartRent.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">10,000+</div>
                    <div class="text-blue-100">Properties Managed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">5,000+</div>
                    <div class="text-blue-100">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">99.9%</div>
                    <div class="text-blue-100">Uptime</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">24/7</div>
                    <div class="text-blue-100">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Ready to Transform Your Property Management?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Start your free trial today and see how SmartRent can streamline your property management operations.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="login.html" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors flex items-center space-x-2">
                    <span>Start Free Trial</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <button class="border-2 border-gray-600 text-gray-300 hover:bg-gray-600 hover:text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors">
                    Schedule Demo
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-home text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">SmartRent</h3>
                            <p class="text-sm text-gray-500">Property Management</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4 max-w-md">
                        SmartRent is the leading property management platform that helps landlords and property managers streamline their operations and maximize their rental income.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-600 hover:text-blue-600 transition-colors">Features</a></li>
                        <li><a href="#pricing" class="text-gray-600 hover:text-blue-600 transition-colors">Pricing</a></li>
                        <li><a href="#about" class="text-gray-600 hover:text-blue-600 transition-colors">About Us</a></li>
                        <li><a href="#contact" class="text-gray-600 hover:text-blue-600 transition-colors">Contact</a></li>
                        <li><a href="login.blade.php" class="text-gray-600 hover:text-blue-600 transition-colors">Sign In</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Documentation</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">API Reference</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">System Status</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-8 text-center">
                <p class="text-gray-500">
                    © 2024 SmartRent. All rights reserved. Built with ❤️ for property managers.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>