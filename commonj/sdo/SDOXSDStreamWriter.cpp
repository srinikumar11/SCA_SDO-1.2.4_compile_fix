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

#include "commonj/sdo/SDOXSDStreamWriter.h"
#include <sstream>

namespace commonj
{
    namespace sdo
    {
        
        
        
        
        SDOXSDStreamWriter::SDOXSDStreamWriter(std::ostream& outXML)
            : outXmlStream(outXML)
        {
        }
        
        SDOXSDStreamWriter::~SDOXSDStreamWriter()
        {    
        }
        
        int SDOXSDStreamWriter::write(const TypeList& types, const SDOXMLString& targetNamespaceURI,
            const propertyMap& openprops, int indent)
        {
            int rc = SDOXSDBufferWriter::write(types, targetNamespaceURI, openprops, indent);

            // Now stream the buffer
            outXmlStream << getBuffer();
            return rc;
        }            
    } // End - namespace sdo
} // End - namespace commonj

