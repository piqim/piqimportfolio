import React from "react";
import { NavLink } from "react-router-dom";

const Footer = () => {
  return (
    <footer id="footer" className="w-full">
      <div className="container py-6 mx-auto px-2">
        <div className="flex flex-wrap items-center">
          {/* Copyright */}
          <div className="w-full text-center">
            <div className="copyright">
              &copy; Copyright 2026 <strong>PIQIM</strong>. All Rights Reserved
            </div>
          </div>
          {/* Footer Links */}
          <div className="w-full">
            <nav className="footer-links text-center pt-2">
                <a href="/" className="scrollto px-2">
                  Home
                </a>
                <a href="#about" className="scrollto px-2">About</a>
            </nav>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
