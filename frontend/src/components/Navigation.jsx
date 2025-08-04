import React from "react";
import { GoHome } from "react-icons/go";

function Navigation() {
  return (
    <div className="nav-container shadow-md top-10 absolute left-30 w-296 z-50 rounded-xl">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between h-16 items-center">
          <div className="flex-shrink-0 text-2xl font-bold text-blue-600">
            AwiPort
          </div>
          <div className="hidden md:flex space-x-6">
            <a href="#home" className="text-gray-700 hover:text-blue-600">
              Home
            </a>
            <a href="#home" className="text-gray-700 hover:text-blue-600">
              Project
            </a>
            <a href="#home" className="text-gray-700 hover:text-blue-600">
              Work
            </a>
            <a href="#home" className="text-gray-700 hover:text-blue-600">
              Contact
            </a>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Navigation;
