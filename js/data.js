var sealNames  = new Array("Sun","Dragon","Wind","Night","Seed","Serpent",
            "Worldbridger","Hand","Star","Moon","Dog","Monkey","Human",
            "Skywalker","Wizard","Eagle","Warrior","Earth","Mirror","Storm");

var sealColors = new Array("Yellow", "Red", "White", "Blue");

var toneNames  = new Array("Magnetic", "Lunar", "Electric", "Self-Existing", "Overtone", 
            "Rhythmic", "Resonant", "Galactic", "Solar", "Planetary", "Spectral", 
            "Crystal", "Cosmic");

var portals     = new Array("1","20","22","39","43","50","51","58","64",
    "69","72","77","85","88","93","96","106","107","108",
    "109","110","111","112","113","114","115","146","147",
    "148","149","150","151","152","153","154","155","165",
    "168","173","176","184","189","192","197","203","210",
    "211","218","222","239","241","260");


var seasons     = new Array("2","10","30","50","55","75","95","115","120",
    "140","160","180","185","205","225","245","250");

var dayNames    = new Array("Dali", "Seli", "Gamma", "Kali", "Alpha", "Limi", "Silio");

var sealPoem1   = new Array("Enlighten", "Nurture", "Communicate", "Dream", "Target", "Survive", 
    "Equalize", "Know", "Beautify", "Purify", "Love", "Play", "Influence", 
    "Explore", "Enchant", "Create", "Question", "Evolve", "Reflect", "Catalyse");

var sealPoem2   = new Array("Life", "Being", "Breath", "Intuition", "Awareness", "Instinct", 
    "Opportunity", "Healing", "Art", "Flow", "Loyalty", "Illusion", "Wisdom", 
    "Wakefullness", "Receptivity", "Mind", "Fearlessness", "Synchronicity", "Order", 
    "Energy");

var sealPoem3   = new Array("Matrix", "Input", "Input", "Input", "Input", "Store", "Store", 
    "Store", "Store", "Process", "Process", "Process", "Process", "Output", "Output", 
    "Output", "Output", "Matrix", "Matrix", "Matrix");

var sealPoem4    = new Array("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
    "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", 
    "Heart", "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", 
    "Navigation", "Endlessness", "Self-generation");

var guidedByPoem    = new Array("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
    "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", "Heart", 
    "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", "Navigation", 
    "Endlessness", "Self-generation");

var tonePoem1   = new Array("","Unify", "Polarize", "Activate", "Define", "Empower", 
    "Organize", "Channel", "Harmonize", "Pulse", "Perfect", "Dissolve", "Dedicate", 
    "Endure");

var tonePoem2   = new Array("","Attracting", "Stabilizing", "Bonding", "Measuring", 
    "Commanding", "Balancing", "Inspiring", "Modeling", "Realizing", "Producing", 
    "Releasing", "Universalizing", "Transcending");

var tonePoem3   = new Array("0","Purpose", "Challenge", "Service", "Form", "Radiance", 
    "Equality", "Attunement", "Integrity", "Intention", "Manifestation", "Liberation", 
    "Cooperation", "Presence");

var convertYear         = new Array();
var yearConversion      = new Array(
     new Array(217, 2065, 2013, 1961, 1909),
     new Array(112, 2064, 2012, 1960, 1908),    
     new Array(7, 2063, 2011, 1959, 1907),
     new Array(162, 2062, 2010, 1958, 1906),
     new Array(57, 2061, 2009, 1957, 1905),
     new Array(212, 2060, 2008, 1956, 1904),
     new Array(107, 2059, 2007, 1955, 1903),
     new Array(2, 2058, 2006, 1954, 1902),
     new Array(157, 2057, 2005, 1953, 1901),
     new Array(52, 2056, 2004, 1952, 1900),
     new Array(207, 2055, 2003, 1951, 1899),
     new Array(102, 2054, 2002, 1950, 1898),
     new Array(257, 2053, 2001, 1949, 1897),
     new Array(152, 2052, 2000, 1948, 1896),
     new Array(47, 2051, 1999, 1947, 1895),
     new Array(202, 2050, 1998, 1946, 1894),
     new Array(97, 2049, 1997, 1945, 1893),  
     new Array(252, 2048, 1996, 1944, 1892),    
     new Array(147, 2047, 1995, 1943, 1891),  
     new Array(42, 2046, 1994, 1942, 1890),  
     new Array(197, 2045, 1993, 1941, 1889),    
     new Array(92, 2044, 1992, 1940, 1888),  
     new Array(247, 2043, 1991, 1939, 1887),
     new Array(142, 2042, 1990, 1938, 1886),  
     new Array(37, 2041, 1989, 1937, 1885),  
     new Array(192, 2040, 1988, 1936, 1884),  
     new Array(87, 2039, 1987, 1935, 1883),    
     new Array(217, 2038, 1986, 1934, 1882),  
     new Array(137, 2037, 1985, 1933, 1881),  
     new Array(32, 2036, 1984, 1932, 1880),    
     new Array(187, 2035, 1983, 1931, 1879),  
     new Array(82, 2034, 1982, 1930, 1878),    
     new Array(237, 2033, 1981, 1929, 1877),      
     new Array(132, 2032, 1980, 1928, 1876),  
     new Array(27, 2031, 1979, 1927, 1875),  
     new Array(182, 2030, 1978, 1926, 1874),  
     new Array(77, 2029, 1977, 1925, 1873),  
     new Array(232, 2028, 1976, 1924, 1872),      
     new Array(127, 2027, 1975, 1923, 1871),
     new Array(22, 2026, 1974, 1922, 1870),  
     new Array(177, 2025, 1973, 1921, 1869),
     new Array(72, 2024, 1972, 1920, 1868),  
     new Array(227, 2023, 1971, 1919, 1867),  
     new Array(122, 2022, 1970, 1918, 1866),
     new Array(17, 2021, 1969, 1917, 1865),
     new Array(172, 2020, 1968, 1916, 1864),  
     new Array(67, 2019, 1967, 1915, 1863),  
     new Array(222, 2018, 1966, 1914, 1862),
     new Array(117, 2017, 1965, 1913, 1861),  
     new Array(12, 2016, 1964, 1912, 1860),    
     new Array(167, 2015, 1963, 1911, 1859),  
     new Array(62, 2014, 1962, 1910, 1858)
);

var monthConversion = new Array(0,31,59,90,120,151,181,212,243,13,44,74);

var gregorianMonths = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

