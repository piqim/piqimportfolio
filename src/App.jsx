import Header from "./components/Header";
import Footer from "./components/Footer";
import About from "./components/About";
import Portfolio from "./components/Portfolio";
import Projects from "./components/Projects";
import Contact from "./components/Contact";

const App = () => {
  
  return (
    <div className="w-full">
      <Header />
      <About />
      <Projects/>
      <Portfolio/>
      <Contact/>
      <Footer />
    </div>
  );
};

export default App;