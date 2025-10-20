<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartRent - Tenants Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg flex flex-col">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-home text-white text-lg"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">SmartRent</h2>
                        <p class="text-sm text-gray-500">Management System</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-th-large w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-building w-5"></i>
                            <span>Properties</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-mobile-alt w-5"></i>
                            <span>Smart Devices</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-600 rounded-lg border-r-2 border-blue-600">
                            <i class="fas fa-users w-5"></i>
                            <span class="font-medium">Tenants</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-wrench w-5"></i>
                            <span>Maintenance</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">
                            <i class="fas fa-chart-bar w-5"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Profile -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-gray-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">John Manager</p>
                        <p class="text-xs text-gray-500">Property Manager</p>
                    </div>
                    <i class="fas fa-cog text-gray-400 ml-auto cursor-pointer hover:text-gray-600 transition-colors"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <div class="bg-white border-b border-gray-200 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Tenants</h1>
                        <p class="text-gray-600 mt-1">Manage tenant information, leases, and communications.</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center space-x-2">
                        <i class="fas fa-plus text-sm"></i>
                        <span>Add Tenant</span>
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="p-8 pb-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Tenants -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Total Tenants</p>
                                <p class="text-3xl font-bold text-gray-900">6</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Active -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Active</p>
                                <p class="text-3xl font-bold text-gray-900">4</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-check-circle text-green-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Late Payments -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Late Payments</p>
                                <p class="text-3xl font-bold text-gray-900">1</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-red-600 text-lg"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Expiring Soon -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Expiring Soon</p>
                                <p class="text-3xl font-bold text-gray-900">2</p>
                            </div>
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calendar-times text-orange-600 text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search and Filter -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 max-w-md">
                            <div class="relative">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="text" placeholder="Search tenants..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="ml-4">
                            <button class="flex items-center space-x-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <i class="fas fa-filter text-gray-400"></i>
                                <span class="text-gray-700">All Status</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tenants Table -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Tenant</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Property</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Lease</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Rent</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Status</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Payment</th>
                                    <th class="text-left py-4 px-6 font-medium text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Sarah Johnson -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Sarah Johnson" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">Sarah Johnson</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>sarah.johnson@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 123-4567</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Sunset Villa #12</p>
                                                <p class="text-sm text-gray-500">Unit 12A</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">1/15/2024</p>
                                                <p class="text-sm text-gray-500">to 1/14/2025</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$2,800</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-check-circle text-green-500"></i>
                                            <span class="text-sm text-green-600 font-medium">Current</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Michael Chen -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Michael Chen" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">Michael Chen</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>michael.chen@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 234-5678</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Downtown Loft #3</p>
                                                <p class="text-sm text-gray-500">Unit 3B</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">9/1/2023</p>
                                                <p class="text-sm text-gray-500">to 8/31/2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$3,200</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-check-circle text-green-500"></i>
                                            <span class="text-sm text-green-600 font-medium">Current</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Emily Rodriguez -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Emily Rodriguez" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">Emily Rodriguez</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>emily.rodriguez@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 345-6789</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Garden Court #15</p>
                                                <p class="text-sm text-gray-500">Unit 15C</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">3/1/2024</p>
                                                <p class="text-sm text-gray-500">to 2/28/2025</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$1,900</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-exclamation-circle text-red-500"></i>
                                            <span class="text-sm text-red-600 font-medium">Late</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- David Thompson -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="David Thompson" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">David Thompson</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>david.thompson@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 456-7890</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Tech Hub #22</p>
                                                <p class="text-sm text-gray-500">Unit 22A</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">12/1/2023</p>
                                                <p class="text-sm text-gray-500">to 11/30/2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$4,100</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-check-circle text-green-500"></i>
                                            <span class="text-sm text-green-600 font-medium">Current</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Lisa Wong -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Lisa Wong" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">Lisa Wong</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>lisa.wong@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 567-8901</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Historic Heights #7</p>
                                                <p class="text-sm text-gray-500">Unit 7B</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">2/15/2024</p>
                                                <p class="text-sm text-gray-500">to 2/14/2025</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$2,600</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Notice
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-check-circle text-green-500"></i>
                                            <span class="text-sm text-green-600 font-medium">Current</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- James Wilson -->
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://images.pexels.com/photos/1040880/pexels-photo-1040880.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="James Wilson" class="w-10 h-10 rounded-full object-cover">
                                            <div>
                                                <p class="font-medium text-gray-900">James Wilson</p>
                                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-envelope text-xs"></i>
                                                        <span>james.wilson@email.com</span>
                                                    </span>
                                                    <span class="flex items-center space-x-1">
                                                        <i class="fas fa-phone text-xs"></i>
                                                        <span>(555) 678-9012</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-home text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">Riverside Manor #8</p>
                                                <p class="text-sm text-gray-500">Unit 8A</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                            <div>
                                                <p class="font-medium text-gray-900">6/1/2023</p>
                                                <p class="text-sm text-gray-500">to 5/31/2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <p class="font-medium text-gray-900">$2,400</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Expired
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-check-circle text-green-500"></i>
                                            <span class="text-sm text-green-600 font-medium">Current</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>