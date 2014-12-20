<?php

namespace EricHansen\AllyBankApy\Apys;


abstract class ApysBase {
    /**
     * Returns the portion of the URI that is after "/bank/"
     *
     * @return string
     */
    public function getPage()
    {
        return "";
    }

    /**
     * We will use regex to fetch the data we need.  Pretty cool, huh?
     *
     * This seems to be the same for all so may as well specify it here.
     *
     * @return string
     */
    public function getRegex()
    {
        return "<span class=\"rate-apy\">(.*)</span>";
    }

    /**
     * Use match_all or match?  Default: match
     *
     * @return bool
     */
    public function shouldReturnMultiple()
    {
        return false;
    }
}