import { useState } from "react";

export default function Header() {
  const [mobileNavActive, setMobileNavActive] = useState(false);
  const [mobileDropdownActive, setMobileDropdownActive] = useState(false);

  const toggleMobileNav = () => {
    setMobileNavActive(!mobileNavActive);
    setMobileDropdownActive(false); // Close dropdown when toggling nav
  };

  const toggleMobileDropdown = () => {
    setMobileDropdownActive(!mobileDropdownActive);
  };

  return (
    <header
      id="header"
      className="left-0 right-0 min-h-screen flex items-start z-50 bg-[36%_49%] sm:bg-[37%_47%] md:bg-[40%_50%] lg:bg-[40%_52%]"
    >
      <div className="shadow-overlay">
        <div className="md:flex justify-between md:mx-6 lg:mx-auto mx-4 lg:px-10 py-4 flex items-center">
          {/* Logo */}
          <div className="logo">
            <h1>
              <a href="/">
                <span>PIQIM</span>
              </a>
            </h1>
          </div>

          {/* Desktop Navbar */}
          <nav className="nav-menu hidden md:block text-white">
            <ul className="flex space-x-8 font-semibold">
                <li>
                  <a href="#about" className="hover:text-opacity-80 transition">A B O U T</a>
                </li>

                <li>
                  <a href="#portfolio" className="hover:text-opacity-80 transition">P O R T F O L I O</a>
                </li>

                <li>
                  <a href="#projects" className="hover:text-opacity-80 transition">P R O J E C T S</a>
                </li>

                <li>
                  <a href="#contact" className="hover:text-opacity-80 transition">C O N T A C T</a>
                </li>
            </ul>
          </nav>

          {/* Mobile Menu Toggle Button */}
          <button
            className="mobile-nav-toggle md:hidden text-white text-3xl focus:outline-none z-50"
            onClick={toggleMobileNav}
          >
            <i
              className={mobileNavActive ? "ri-close-line" : "ri-menu-line"}
            ></i>
          </button>

          {/* Title Name */}
          <div className="absolute inset-0 flex items-center justify-center z-10 cursor-default pointer-events-none">
            <div className="p-10 text-center pointer-events-auto">
              <h1 className="text-4xl md:text-5xl lg:text-6xl text-[--color-light] font-bold mb-2 md:mb-0">
                MUSTAQIM BIN BURHANUDDIN
              </h1>
              <p className="text-sm text-[--color-light]">
                PROGRAMMER, MATHEMATICIAN, FRONT COURT PLAYER, AND MALAYSIAN
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* Mobile Navbar */}
      <div
        className={`fixed inset-0 bg-black bg-opacity-90 z-40 flex flex-col items-center justify-center text-white transition-transform duration-300 ${
          mobileNavActive ? "translate-x-0" : "translate-x-full"
        } md:hidden`}
      >
        <a href="#about" className="text-xl py-2" onClick={toggleMobileNav}>
          ABOUT
        </a>
        <a href="#portfolio" className="text-xl py-2" onClick={toggleMobileNav}>
          PORTFOLIO
        </a>
        <a href="#projects" className="text-xl py-2" onClick={toggleMobileNav}>
          PROJECTS
        </a>
        <a href="#contact" className="text-xl py-2" onClick={toggleMobileNav}>
          CONTACT
        </a>
      </div>
    </header>
  );
}
