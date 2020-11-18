<?php


    namespace App\Entity;


    class Country
    {
        private ?string $country;
        private ?int $cases;
        private ?int $todayCases;
        private ?int $deaths;
        private ?int $todayDeaths;
        private ?int $recovered;
        private ?int $active;
        private ?int $critical;
        private ?int $casesPerOneMillion;
        private ?int $deathsPerOneMillion;
        private ?int $totalTests;
        private ?int $testsPerOneMillion;

        /**
         * @return string|null
         */
        public function getCountry(): ?string
        {
            return $this->country;
        }

        /**
         * @param string|null $country
         */
        public function setCountry(?string $country): void
        {
            $this->country = $country;
        }

        /**
         * @return int|null
         */
        public function getCases(): ?int
        {
            return $this->cases;
        }

        /**
         * @param int|null $cases
         */
        public function setCases(?int $cases): void
        {
            $this->cases = $cases;
        }

        /**
         * @return int|null
         */
        public function getTodayCases(): ?int
        {
            return $this->todayCases;
        }

        /**
         * @param int|null $todayCases
         */
        public function setTodayCases(?int $todayCases): void
        {
            $this->todayCases = $todayCases;
        }

        /**
         * @return int|null
         */
        public function getDeaths(): ?int
        {
            return $this->deaths;
        }

        /**
         * @param int|null $deaths
         */
        public function setDeaths(?int $deaths): void
        {
            $this->deaths = $deaths;
        }

        /**
         * @return int|null
         */
        public function getTodayDeaths(): ?int
        {
            return $this->todayDeaths;
        }

        /**
         * @param int|null $todayDeaths
         */
        public function setTodayDeaths(?int $todayDeaths): void
        {
            $this->todayDeaths = $todayDeaths;
        }

        /**
         * @return int|null
         */
        public function getRecovered(): ?int
        {
            return $this->recovered;
        }

        /**
         * @param int|null $recovered
         */
        public function setRecovered(?int $recovered): void
        {
            $this->recovered = $recovered;
        }

        /**
         * @return int|null
         */
        public function getActive(): ?int
        {
            return $this->active;
        }

        /**
         * @param int|null $active
         */
        public function setActive(?int $active): void
        {
            $this->active = $active;
        }

        /**
         * @return int|null
         */
        public function getCritical(): ?int
        {
            return $this->critical;
        }

        /**
         * @param int|null $critical
         */
        public function setCritical(?int $critical): void
        {
            $this->critical = $critical;
        }

        /**
         * @return int|null
         */
        public function getCasesPerOneMillion(): ?int
        {
            return $this->casesPerOneMillion;
        }

        /**
         * @param int|null $casesPerOneMillion
         */
        public function setCasesPerOneMillion(?int $casesPerOneMillion): void
        {
            $this->casesPerOneMillion = $casesPerOneMillion;
        }

        /**
         * @return int|null
         */
        public function getDeathsPerOneMillion(): ?int
        {
            return $this->deathsPerOneMillion;
        }

        /**
         * @param int|null $deathsPerOneMillion
         */
        public function setDeathsPerOneMillion(?int $deathsPerOneMillion): void
        {
            $this->deathsPerOneMillion = $deathsPerOneMillion;
        }

        /**
         * @return int|null
         */
        public function getTotalTests(): ?int
        {
            return $this->totalTests;
        }

        /**
         * @param int|null $totalTests
         */
        public function setTotalTests(?int $totalTests): void
        {
            $this->totalTests = $totalTests;
        }

        /**
         * @return int|null
         */
        public function getTestsPerOneMillion(): ?int
        {
            return $this->testsPerOneMillion;
        }

        /**
         * @param int|null $testsPerOneMillion
         */
        public function setTestsPerOneMillion(?int $testsPerOneMillion): void
        {
            $this->testsPerOneMillion = $testsPerOneMillion;
        }





    }