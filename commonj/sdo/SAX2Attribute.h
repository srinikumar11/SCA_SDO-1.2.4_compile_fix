/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 *   
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

/* $Rev: 452786 $ $Date: 2007/08/24 15:20:21 $ */

#ifndef _SAX2ATTRIBUTE_H_
#define _SAX2ATTRIBUTE_H_

#include "commonj/sdo/disable_warn.h"

#include "commonj/sdo/SDOXMLString.h"

namespace commonj
{
    namespace sdo
    {
        
/**
 * SAX2Attribute holds an attribute supplied by the SAX2 parser.
 */
        
        class SAX2Attribute
        {
            
        public:
            
            SAX2Attribute();
            SAX2Attribute(const xmlChar **attribute);
            
            virtual ~SAX2Attribute();
            
            const SDOXMLString& getName() const {return name;}
            const SDOXMLString& getPrefix() const {return prefix;}
            const SDOXMLString& getUri() const {return uri;}
            const SDOXMLString& getValue() const {return value;}
            
            
        private:
            SDOXMLString name;
            SDOXMLString prefix;
            SDOXMLString uri;
            SDOXMLString value;
            
            
            
        };
    } // End - namespace sdo
} // End - namespace commonj

#endif //_SAX2ATTRIBUTE_H_
