#!/bin/bash
SOURCEDIR="$( cd "$( dirname "$0" )" && pwd )"

cd "$SOURCEDIR"
"./_migrate.sh" domain.tld https://$(wp eval "echo env('BROWSER_SYNC_HOST');"|xargs) https://domain.tld
